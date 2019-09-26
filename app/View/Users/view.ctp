<table class='table table-hover'>

    <thead>
    <tr>
    <th>ID</th>
        <th>Username</th>
        <th>Name</th>
        <th>Country</th>
        
    </tr></thead>
    <tbody>
    
        <tr>
            <td><a href="/cakephp/users/view/<?=$user['User']['id']; ?>"><?=$user['User']['id']; ?></a></td>
            <td><?=$user['User']['username']; ?></td>
            <td><?=$user['User']['name']; ?></td>
            <td><?=$user['UserProfile']['country']; ?></td>
        </tr>
   
    </tbody>


</table>