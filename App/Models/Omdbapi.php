<?php

namespace App\Models;

class omdbapi
{
    public $api;
    public $conn;

    function OmdbapiMetaInserter()
    {
        $api = $this->api;
        foreach ($api['Search'] as $key => $value) {
            $sql .= 'INSERT INTO movies (title,year, imdbId, type)
SELECT "' . $value['Title'] . '", ' . $value['Year'] . ',  "' . $value['imdbID'] . '","' . $value['Type'] . '"
WHERE NOT EXISTS
(SELECT imdbID FROM movies WHERE imdbID =  "' . $value['imdbID'] . '");';


            $sql .= 'INSERT INTO images (imdbId, poster)
SELECT   "' . $value['imdbID'] . '","' . $value['Poster'] . '"
WHERE NOT EXISTS
(SELECT imdbID FROM images WHERE imdbID =  "' . $value['imdbID'] . '");';

        }
        if ($this->conn->multi_query($sql) === TRUE) {
            // echo "New records created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }

        $this->conn->close();
        return $api;
    }

}
