<?php
namespace Models;

class  user {
 public $user;
 public $password;
 public $domain;

  public function getNom(){
    return $this->user;
  }

  public function setNom($new_user_name){
    $this->user = $new_user_name;
  }
  public function setPasse($new_user_pass){
    $this->password = $new_user_pass;
  }

  static public function AuthBdd() {
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
