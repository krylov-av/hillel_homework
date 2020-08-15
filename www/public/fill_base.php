<?php
require_once '../vendor/autoload.php';
// Load our models
require_once '../src/Model.php';
// Create variable Faker
//https://github.com/fzaninotto/Faker/blob/master/readme.md#installation
$faker = Faker\Factory::create();

////////////////////////////////
/// Generate 10 tags
for ($i=1; $i<=10; $i++)
{
    $tag = new Tag;
    $tag->tag = $faker->word;
    //print $tag->tag."<br>";
    $tag->save();
    unset($tag);
}
///////////////////////////////
/// Get tags ids and store to array
$tags = Tag::all();
$tagsinsystem = array();
foreach($tags as $row)
{
    array_push($tagsinsystem,$row->getKey());
}

//////////////////////////////////
/// Make 3 users
///           with telegram
///           with 3 publications
///                 each publication has 3 tags
for ($i=1; $i<=3; $i++)
{
    $user = new User;
    $user->email = $faker->email;
    $user->password = $faker->password;
    $user->save();
    print "<hr>".$user->id."<hr>";
    if (random_int(1,100)>=20)
    {
        $telegramA = $user->telegram ?? new Telegram;
        $telegramA->chat_id=random_int(100000,999999);
        $user->telegram()->save($telegramA);
        unset($telegramA);
    }
    for ($j=1; $j<=3; $j++)
    {
        $publication = new Publication();
        $publication->title = $faker->sentence(random_int(3,7));
        $publication->text = $faker->text(3000);
        $user->publications()->save($publication);
        //attach tags
         shuffle($tagsinsystem);
         $z=array_slice($tagsinsystem,0,3);
         $publication->tags()->attach($z);
        unset($publication);
    }
    unset($user);
}
//$user = User::all();
//print "<pre>";
//print_r($user);
//print "</pre>";