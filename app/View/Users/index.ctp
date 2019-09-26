<a href="/cakephp/users/add">Add new user</a>
<table class='table table-hover'>

    <thead>
    <tr>
    <th>ID</th>
        <th>Username</th>
        <th>Name</th>
        <th>Delete</th>
        
    </tr></thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <?php echo $this->element('users_list', array ('id' => $user['User']['id'], 'name'=> $user['User']['name'], 'username' => $user['User']['username'])); ?>
        <?php endforeach; ?>
    </tbody>


</table>
<br>
Result: <?php echo $this->Calc->add(15,5); ?>

<?php echo $this->Paginator->numbers(array('before' => 'Page:')); ?>