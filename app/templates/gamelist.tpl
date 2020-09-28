<table class="table">
<thead class="thead-dark">
<tr>
  <th scope="col">Id</th>
  <th scope="col">Titre</th>
</tr>
</thead>
<tbody>
{foreach $games as $game}
<tr><th scope='col'>{$game->id}</th><td>{$game->title}</td></tr>
{/foreach}
</tbody>
</table>