<?php

namespace App\Models;

class Movie
{

    private static $movieData = [
        [
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly, McCall knows what he has to do: become his friends protector by taking on the mafia.',
            'tahun' => 2023,
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
            'rating' => '6.7',
            'hd'=>true,
        ],
        [
            'id' => 'tt2567856',
            'judul' => 'Mission: Impossible - Dead Reckoning Part One',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon before it falls into the wrong hands.',
            'tahun' => 2023,
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
            'rating' => '5.5',
            'hd'=>true,
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'pemain' => ['	Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
            'rating' => '7.0',
            'hd'=>true,
        ],
        [
            'id' => 'tt1745969',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands the ultimate sacrifice from those chosen to fly it.',
            'tahun' => 2022,
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
            'rating' => '7.1',
            'hd'=>true,
        ],
        [
            'id' => 'tt1745962',
            'judul' => 'Mortal Kombat',
            'sinopsis' => 'A group of fighters must compete in a tournament to determine the fate of Earthrealm against the forces of Outworld.',
            'tahun' => 2021,
            'pemain' => ['Lewis Tan', 'Jessica McNamee', 'Josh Lawson'],
            'foto_sampul' => 'mortal-combat.jpg',
            'rating' => '8.0',
            'hd'=>true,
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Spider-Man: No Way Home',
            'sinopsis' => 'Spider-Man teams up with other versions of himself from different dimensions to battle powerful enemies and save his reality.',
            'tahun' => 2021,
            'pemain' => ['Tom Holland', 'Zendaya', 'Andrew Garfield'],
            'foto_sampul' => 'spiderman.jpg',
            'rating' => '8.1',
            'hd'=>true,
        ],
        [
            'id' => 'tt1745961',
            'judul' => 'Snake Eyes',
            'sinopsis' => 'A spin-off of the G.I. Joe franchise, Snake Eyes tells the origin story of the iconic ninja commando.',
            'tahun' => 2021,
            'pemain' => ['Henry Golding', 'Andrew Koji', 'Úrsula Corberó'],
            'foto_sampul' => 'snakeeyes.jpg',
            'rating' => '5.5',
            'hd'=>true,
        ],
        [
            'id' => 'tt1745123',
            'judul' => 'No Time to Die',
            'sinopsis' => 'James Bond comes out of retirement to take on a new villain with dangerous technology that could threaten the world.',
            'tahun' => 2021,
            'pemain' => ['Daniel Craig', 'Rami Malek', 'Léa Seydoux'],
            'foto_sampul' => 'notimetodie.jpg',
            'rating' => '6.9',
            'hd'=>true,
        ],
        [
            'id' => 'tt1745890',
            'judul' => 'Fast and Furious 9',
            'sinopsis' => 'The Fast and Furious crew returns for another high-octane adventure with new threats and challenges.',
            'tahun' => 2022,
            'pemain' => ['Vin Diesel', 'Michelle Rodriguez', 'John Cena'],
            'foto_sampul' => '9.jpg',
            'rating' => '8.5',
            'hd'=>true,
        ],
        [
            'id' => 'tt1745612',
            'judul' => 'John Wick 4',
            'sinopsis' => 'John Wick is back for more action and mayhem in the fourth installment of the franchise.',
            'tahun' => 2022,
            'pemain' => ['Keanu Reeves', 'Halle Berry', 'Laurence Fishburne'],
            'foto_sampul' => 'john.jpg',
            'rating' => '9.0',
            'hd'=>true,
        ],
        [
            'id' => 'tt1745543',
            'judul' => 'Justice League Zack Snyder\'s',
            'sinopsis' => 'Zack Snyder`s directors cut of the Justice League, featuring additional footage and a different take on the superhero team-up.',
            'tahun' => 2021,
            'pemain' => ['Ben Affleck', 'Henry Cavill', 'Gal Gadot'],
            'foto_sampul' => 'snyder.jpg',
            'rating' => '6.7',
            'hd'=>true,
        ],
        [
            'id' => 'tt3371709',
            'judul' => 'Transformer: The Last Knight',
            'sinopsis' => 'In "Transformer: The Last Knight," the battle for survival rages on as humans and Transformers are at war. Optimus Prime is gone. The key to saving our future lies buried in the secrets of the past and the hidden history of Transformers on Earth.',
            'tahun' => 2017,
            'pemain' => ['Mark Wahlberg', 'Anthony Hopkins', 'Laura Haddock'],
            'foto_sampul' => 'transformer.jpg',
            'rating' => '7.5',
            'hd'=>true,
        ],
        [
            'id' => 'tt7737786',
            'judul' => 'Sonic the Hedgehog',
            'sinopsis' => 'After discovering a small, blue, fast hedgehog, a small-town police officer must help him defeat an evil genius who wants to do experiments on him.',
            'tahun' => 2020,
            'pemain' => ['Ben Schwartz', 'James Marsden', 'Jim Carrey'],
            'foto_sampul' => 'sonic.jpg',
            'rating' => '6.5',
            'hd'=>true,
        ],
        [
            'id' => 'tt1634106',
            'judul' => 'Bloodshot',
            'sinopsis' => 'After he and his wife are murdered, Marine Ray Garrison is resurrected by a team of scientists. Enhanced with nanotechnology, he becomes a superhuman, biotech killing machine - Bloodshot.',
            'tahun' => 2020,
            'pemain' => ['Vin Diesel', 'Eiza González', 'Sam Heughan'],
            'foto_sampul' => 'blood.jpg',
            'rating' => '5.7',
            'hd'=>true,

        ],
        [
            'id' => 'tt7126948',
            'judul' => 'Wonder Woman 1984',
            'sinopsis' => 'Diana must contend with a work colleague and businessman, whose desire for extreme wealth sends the world down a path of destruction, after an ancient artifact that grants wishes goes missing.',
            'tahun' => 2020,
            'pemain' => ['Gal Gadot', 'Chris Pine', 'Kristen Wiig'],
            'foto_sampul' => 'wonder.jpg',
            'rating' => '5.4',
            'hd'=>true,
        ],
        [
            'id' => 'tt14820812',
            'judul' => 'The Medium',
            'sinopsis' => 'A documentary film crew is trapped inside an abandoned mental hospital with a shadowy, supernatural entity.',
            'tahun' => 2021,
            'pemain' => ['Nawapol Thamrongrattanarit', 'Paramej Noiam', 'Sukhontha Koetnimit'],
            'foto_sampul' => 'medium.jpg',
            'rating' => '6.6',
            'hd'=>true,
        ],
    ];

    public static function all(){
        // pakai method collection
        return collect(self::$movieData);
    }

    public static function find($id){
        // panggil method all()
        $movie = static::all();
        return $movie->firstWhere('id', $id);
    }
    public static function search($query)
    {
    return collect(self::$movieData)->filter(function ($movie) use ($query) {
        return stripos($movie['judul'], $query) !== false || stripos($movie['sinopsis'], $query) !== false;
    })->values();
    }
}
