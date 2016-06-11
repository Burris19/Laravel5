<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Note;

class NoteExerciseTest extends TestCase
{

    use DatabaseTransactions;

    public function test_notes_summary_and_notes_details()
    {
    	$text = 'Begin of the note Unde rerum odio magni aut aut aut voluptatem consequatur. Doloribus nemo facere voluptas saepe. Vel id aperiam quia qui ex ipsum. Consequatur quas recusandae ut consequatur veniam. Ipsa fugit dolorem quaerat blanditiis.';

    	$text .= 'End of the note';

    	$note = Note::create(['note' => $text]);

        $this->visit('notes')
        	->see('Begin of the note')
        	->seeInElement('.label', 'Others')
        	->dontSee('End of the note')
        	->seeLink('View note')
        	->click('View note')
        	->see($text)
            ->seeLink('View all notes', 'notes');
    }
}
