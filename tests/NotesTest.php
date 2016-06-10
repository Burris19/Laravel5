<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NotesTest extends TestCase
{
	// use WithoutMiddleware;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    // public function test_create() 
    // {
    // 	// Route::post('')
    // 	// When
    // 	$this->post('notes')
    // 		// Then
    // 		->see('Creating a note');
    // }

    public function test_create_note() {

        $this->visit('notes') 
            ->click('Add a note') // precionar un enlace
            ->seePageIs('notes/create') // nos va a llevar a una pagina que tiene la siguiente url
            ->see('Create a note') //vamos a ver un titulo que diga Create a note
            ->type('A new note', 'note') //aca vamos a escribir por eso el type en un input llamado note  la siguiente leyenda A new note
            ->press('Create note') // y precionamos un boton llamado Create note 
            ->seePageIs('notes') // vamos a ser llevados a la pagina con la url note
            ->see('A new note') // y dentro de esta pagina vamos a ver el texto A new note
            ->seeInDatabase('notes', [
                'note' => 'A new note'
            ]); // y dentro de la base de datos debe de estar el registro anterior
    }



}
