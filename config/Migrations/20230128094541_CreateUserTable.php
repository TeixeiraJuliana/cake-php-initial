<?php
use Migrations\AbstractMigration;

class CreateUserTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('email', 'string',  array( 'limit'=> 250));
        $table->addColumn('phone', 'string',  array( 'limit'=> 20));
        $table->addColumn('document', 'string',  array( 'limit'=> 150));
        $table->addColumn('password', 'string');
        $table->create();
    }
}
