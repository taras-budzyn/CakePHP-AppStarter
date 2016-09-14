<?php
use Migrations\AbstractMigration;

class SuperAdmin extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
      $singleRow = array(
        "email" => "admin@admin",
        "password" => password_hash("admin", PASSWORD_DEFAULT, []),
        "name" => "admin",
        "type" => 2
      );
      $table = $this->table('users');
      $table->insert($singleRow);
      $table->saveData();
    }
}
