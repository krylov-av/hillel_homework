<?php

require_once '../vendor/autoload.php';

require_once '../src/Model.php';

//for ($i=1;$i<=10;$i++)
//{
///
//}

//# Save User to db
//$user = new User;
//$user->email = 'some5@gmail.com';
//$user->password = 'qwerty';
//$user->save();

//# Save Telegram to db (Without relations)
//$telegram = new Telegram;
//$telegram->user_id=1;
//$telegram->chat_id='223322232qwe';
//$telegram->save();

//# Get relation (One to One) data
//$user = User::find(1);
//var_dump($user->telegram);

//# Insert relation (One to One) data (Only new)
// On update we got duplicate row
//$user = User::find(2);
//$telegramA = new Telegram;
//$telegramA->chat_id='7777777';
//$user->telegram()->save($telegramA);


//# Update relation (One to One)
//$user = User::find(2);

//# Insert or update. relation (One to One). This works!
//$user = User::findOrNew(4);
//#$user->email='zzzwww@www.com';
//#$user->password='asdasdasd';
//#$user->save();
//$telegramA = $user->telegram ?? new Telegram;
//$telegramA->chat_id='444';
//$user->telegram()->save($telegramA);

//#Delete data (One to One)
//$user = User::find(2);
//$user->telegram()->delete();

//print "<pre>";
//var_dump($user->telegram());
//print "<pre>";

//print "<pre>";
//var_dump(User::find(2)->telegram());
//print "</pre>";
//////////////////////////////
// #################
// ##Publications
//
// Add Publication
//$user = User::find(4);
//$publication = new Publication();
//$publication->title='title publication1';
//$publication->text='Lorem ipsum1';
//$user->publications()->save($publication);

//$publication = new Publication();
//$publication->title='title publication2';
//$publication->text='Lorem ipsum2';
//$user->publications()->save($publication);

//$publication = new Publication();
//$publication->title='title publication3';
//$publication->text='Lorem ipsum3';
//$user->publications()->save($publication);


// Get Publications / Publication
//$user = User::find(4);
//$publications = $user->publications()->get();
//$publications = $user->publications()->where('text', 'like', '%3%')->get();
//print "<pre>";
//var_dump($publications);
//print "</pre>";

// Update publication belongs user 4 and publication_id=3
//$user = User::find(4);
//$publication = $user->publications()->where('id', 3)->get()->first();
//$publication->text = 'Lorem ipsum updated!';
//$user->publications()->save($publication);

// Delete publications
//$user = User::find(4);
//$publication = $user->publications()->where('id', 8)->get()->first();
//$publication->delete();

//get Publication info (with user) with id 9
//$publication = Publication::find(9);
//$user = $publication->user;
//print $user->email;

// Update user, connected to publication
//$publication = Publication::find(9);
//$publication->user_id=5;
//$publication->save();
/////////////////////////////////

// Table tags
// Fill this as easy as users
//$tag = new Tag;
//$tag->tag = 'tag1';
//$tag->save();

/////////////////////////////////////////
/// ADD Tags to Publications
//$publication = Publication::find(7);
//$publication->tags()->attach([1,2,5,6,9]);
//$publication->tags()->sync([2,5]);
//$publication->tags()->sync([]);

//$ids = $publication->tags()->allRelatedIds();
//print $ids;// [2, 5]

///////////////////////////////////////////////
/// Publications - Tags connection

// Get Publications with Tag(3)
//$tag = Tag::find(3);
//$publications = $tag->publications()->allRelatedIds();
//print $publications;

//$tag = Tag::find(3);
//$tag->publications()->attach([4,9]);

///////////////////////////////////
/// Check methods
//$tag = Tag::find(3);
//$publications = $tag->publications();
//print "<pre>";
//print_r(get_class_methods($publications));
//print "</pre>";


/////////////////////////////////////
/// Attach random tag to publication with id=2
$tags = Tag::all()->random(1);
//$tags = Tag::all();

//$publication = Publication::find(2);
//$publication->tags->attach($tags);

foreach($tags as $row)
{
    print "<pre>";
    print_r($row->getKey());
    print "</pre>";
    print "<hr>";
}
//print_r($tags->id);

//print_r($tags->random(3));
//print_r(get_class_methods($tags));



//->getRelations();
//////////
//$tag = Tag::find(3);
//$tag->publications()->attach([2,3]);

//$tags = $publication->tags;
//print "<pre>";
//print_r($tags);
//print "</pre>";
//print "<hr>";



//////////////////////////////
///
///
///
///
//$users = User::all();
//print "<pre>";
//var_dump($users);
//print "</pre>";
//print "<hr>";
//print "<table border=1>";
//print "<tr>";
//print "<th>id</th>";
//print "<th>email</th>";
//print "<th>password</th>";
//print "</tr>";
//foreach ($users as $user)
//{
//    $row = $user->attributesToArray();
//    print "<tr>";
//    print "<td>".$row['id']."</td>";
//    print "<td>".$row['email']."</td>";
//    print "<td>".$row['password']."</td>";
//    print "</tr>";
//}



