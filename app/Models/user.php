<?php
namespace Models;

class  user {
 public $user;
 public $password;
 public $domain;
 public $new_user_name = $_POST['user'];
 public $new_user_pass = $_POST['mdp'];

  public function getNom(){
    return $this->new_user_name ;
  }

  public function setNom($new_user_name){
    $this->user = $new_user_name;
  }
  public function setPasse($new_user_pass){
    $this->password = $new_user_pass;
  }

  static public function AuthBdd() {
    $userad = new user;
    $userad->setNom($new_user_name);
    $host = 'myldap';
    $basedn = 'dc=mydomain,dc=ex';
    $group = 'SomeGroup';
    $ad = ldap_connect("ldap://{$host}.{$domain}") or die('Could not connect to LDAP server.');
    ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
    @ldap_bind($ad, "{$user}@{$domain}", $password) or die('Could not bind to AD.');
    $userdn = getDN($ad, $user, $basedn);
    if (checkGroupEx($ad, $userdn, getDN($ad, $group, $basedn))) {
    //if (checkGroup($ad, $userdn, getDN($ad, $group, $basedn))) {
        echo "You're authorized as ".getCN($userdn);

    } else {
        echo 'Authorization failed';
    }
    ldap_unbind($ad);

  }
  function getDN($ad, $samaccountname, $basedn) {
      $attributes = array('dn');
      $result = ldap_search($ad, $basedn,
          "(samaccountname={$samaccountname})", $attributes);
      if ($result === FALSE) { return ''; }
      $entries = ldap_get_entries($ad, $result);
      if ($entries['count']>0) { return $entries[0]['dn']; }
      else { return ''; };
  }

  /*
  * This function retrieves and returns CN from given DN
  */
  function getCN($dn) {
      preg_match('/[^,]*/', $dn, $matchs, PREG_OFFSET_CAPTURE, 3);
      return $matchs[0][0];
  }

  /*
  * This function checks group membership of the user, searching only
  * in specified group (not recursively).
  */
  function checkGroup($ad, $userdn, $groupdn) {
      $attributes = array('members');
      $result = ldap_read($ad, $userdn, "(memberof={$groupdn})", $attributes);
      if ($result === FALSE) { return FALSE; };
      $entries = ldap_get_entries($ad, $result);
      return ($entries['count'] > 0);
  }

  /*
  * This function checks group membership of the user, searching
  * in specified group and groups which is its members (recursively).
  */
  function checkGroupEx($ad, $userdn, $groupdn) {
      $attributes = array('memberof');
      $result = ldap_read($ad, $userdn, '(objectclass=*)', $attributes);
      if ($result === FALSE) { return FALSE; };
      $entries = ldap_get_entries($ad, $result);
      if ($entries['count'] <= 0) { return FALSE; };
      if (empty($entries[0]['memberof'])) { return FALSE; } else {
          for ($i = 0; $i < $entries[0]['memberof']['count']; $i++) {
              if ($entries[0]['memberof'][$i] == $groupdn) { return TRUE; }
              elseif (checkGroupEx($ad, $entries[0]['memberof'][$i], $groupdn)) { return TRUE; };
          };
      };
      return FALSE;
  }
