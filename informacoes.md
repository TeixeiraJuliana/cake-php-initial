.\cake
## dentro da pasta bin
.\cake bake all post


## simples em portugues
https://www.youtube.com/watch?v=NrIvj8I0dOY&t=477s



https://www.youtube.com/watch?v=9DDEYHp-hws&t=38s



# curso completo
https://www.youtube.com/watch?v=hP3NEduZ65Y&list=PLGt1lxwGVOI40me32bmhBS2kjkdTJ1-Mn&index=4

# API integration in angular with http
https://www.youtube.com/watch?v=1IPDlV4Y5zA
https://www.youtube.com/watch?v=ElJMJ8TT5aM


https://stackoverflow.com/questions/49672001/angular-5-app-in-cake-php-template


# curso completo

https://www.youtube.com/watch?v=DJh5eHD1dJM&list=PL83b6tjXNFHe-OVRROawG3YdIN_-Kbc6j

## configuração bd

'username' => 'root',
'password' => '',
'database' => 'project',
'encoding' => 'utf8mb4',
'timezone' => 'UTC',
'flags' => [],
'cacheMetadata' => true,
'log' => false,

# Comandos


bin/cake migrations create CreateUserTable
bin/cake migrations migrate



 <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Add Order') ?></legend>
        <?php
            echo $this->Form->control('total');
            echo $this->Form->control('delivery_date');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('update_at');
            echo $this->Form->control('created_at');
            echo $this->Form->control('delete_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
