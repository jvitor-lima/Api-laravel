<?php

namespace App\Models;

class Game
{
    public static function all()
    {
        return [
            ['id' => 1, 'title' => 'League of Legends', 'genre' => 'MOBA', 'description' => 'League of Legends é um jogo eletrônico do gênero multiplayer online battle arena.', 'release_date' => '27/10/2009'],
            ['id' => 2, 'title' => 'Valorant', 'genre' => 'FPS', 'description' => 'Valorant é um jogo eletrônico multijogador gratuito para jogar de tiro em primeira pessoa.', 'release_date' => '02/06/2020'],
            ['id' => 3, 'title' => 'Overcooked', 'genre' => 'Casual', 'description' => 'Overcooked é um jogo eletrônico de simulação de cozinha.', 'release_date' => '02/08/2016'],
            ['id' => 4, 'title' => 'Left 4 Dead 2', 'genre' => 'Survival Horror', 'description' => 'Left 4 Dead 2, assim como seu antecessor, é um jogo multiplayer de survival horror e cooperação de tiro em primeira pessoa.', 'release_date' => '17/11/2009'],
            ['id' => 5, 'title' => 'Tibia', 'genre' => 'MMORPG', 'description' => 'Tibia é um jogo eletrônico de RPG multijogador gratuito, desenvolvido pela CipSoft.', 'release_date' => '07/01/1997'],
            ['id' => 6, 'title' => 'Minecraft', 'genre' => 'Sandbox', 'description' => 'Minecraft é um jogo eletrônico que permite aos jogadores explorar um mundo aberto e construir qualquer coisa.', 'release_date' => '18/11/2011'],
            ['id' => 7, 'title' => 'The Witcher 3: Wild Hunt', 'genre' => 'RPG', 'description' => 'The Witcher 3 é um jogo de RPG de mundo aberto, conhecido por sua narrativa profunda e expansiva.', 'release_date' => '19/05/2015'],
            ['id' => 8, 'title' => 'Apex Legends', 'genre' => 'Battle Royale', 'description' => 'Apex Legends é um jogo de tiro em primeira pessoa do gênero battle royale, desenvolvido pela Respawn Entertainment.', 'release_date' => '04/02/2019'],
            ['id' => 9, 'title' => 'Among Us', 'genre' => 'Social Deduction', 'description' => 'Among Us é um jogo de dedução social onde jogadores tentam identificar os impostores em uma equipe.', 'release_date' => '15/06/2018'],
            ['id' => 10, 'title' => 'Hades', 'genre' => 'Roguelike', 'description' => 'Hades é um jogo roguelike em que você tenta escapar do submundo grego.', 'release_date' => '17/09/2020'],
            ['id' => 11, 'title' => 'Cyberpunk 2077', 'genre' => 'RPG', 'description' => 'Cyberpunk 2077 é um RPG de ação e mundo aberto ambientado em uma distopia futurista.', 'release_date' => '10/12/2020'],
            ['id' => 12, 'title' => 'Stardew Valley', 'genre' => 'RPG', 'description' => 'Stardew Valley é um jogo de simulação de vida e agricultura em um mundo aberto.', 'release_date' => '26/02/2016'],
            ['id' => 13, 'title' => 'Genshin Impact', 'genre' => 'Action RPG', 'description' => 'Genshin Impact é um RPG de ação em mundo aberto com uma vasta gama de personagens e elementos.', 'release_date' => '28/09/2020'],
            ['id' => 14, 'title' => 'Dota 2', 'genre' => 'MOBA', 'description' => 'Dota 2 é um jogo eletrônico do gênero multiplayer online battle arena desenvolvido pela Valve Corporation.', 'release_date' => '09/07/2013'],
            ['id' => 15, 'title' => 'FIFA 22', 'genre' => 'Sports', 'description' => 'FIFA 22 é um jogo de simulação de futebol que representa as ligas e equipes de futebol ao redor do mundo.', 'release_date' => '01/10/2021'],
            ['id' => 16, 'title' => 'Fall Guys', 'genre' => 'Battle Royale', 'description' => 'Fall Guys é um jogo de battle royale onde jogadores competem em desafios e corridas.', 'release_date' => '04/08/2020'],
            ['id' => 17, 'title' => 'Rocket League', 'genre' => 'Sports', 'description' => 'Rocket League é um jogo que combina futebol com carros e competições online.', 'release_date' => '07/07/2015'],
            ['id' => 18, 'title' => 'World of Warcraft', 'genre' => 'MMORPG', 'description' => 'World of Warcraft é um MMORPG que permite aos jogadores explorar um vasto mundo de fantasia.', 'release_date' => '23/11/2004'],
            ['id' => 19, 'title' => 'Sekiro: Shadows Die Twice', 'genre' => 'Action-Adventure', 'description' => 'Sekiro é um jogo de ação e aventura focado em combate e exploração em um Japão feudal fictício.', 'release_date' => '22/03/2019'],
            ['id' => 20, 'title' => 'Celeste', 'genre' => 'Platformer', 'description' => 'Celeste é um jogo de plataforma desafiador com uma história profunda sobre superação e auto-descoberta.', 'release_date' => '25/01/2018'],
        ];
    }

    public static function find($id)
    {
        $games = self::all();
        foreach ($games as $game) {
            if ($game['id'] == $id) {
                return $game;
            }
        }
        return null;
    }
    
    public static function create($data)
    {
        return $data;
    }
    
    public static function update($id, $data)
    {
        return array_merge(['id' => $id], $data);
    }
    
    public static function delete($id)
    {
        return 'Game deleted successfully.';
    }
}