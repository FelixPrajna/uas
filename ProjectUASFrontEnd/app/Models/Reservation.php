<?php

namespace App\Models;

use MongoDB\Client;

class Reservation
{
    protected static $client;

    // Fungsi untuk koneksi ke MongoDB
    public static function connect()
    {
        if (!self::$client) {
            // Koneksi ke MongoDB menggunakan URI dan nama database dari .env
            self::$client = new Client(env('MONGODB_URI', 'mongodb://127.0.0.1:27017'));
        }

        // Mengembalikan koleksi "consultations" dari database yang ditentukan
        return self::$client->selectCollection(env('MONGO_DB_DATABASE', 'uas-projek'), 'reservations');
    }

    // Fungsi untuk membuat konsultasi baru
    public static function createReservation(array $data)
    {
        $collection = self::connect();
        $result = $collection->insertOne($data);

        return $result->getInsertedId();
    }

    public static function getAllReservations()
    {
        $collection = self::connect();
        $cursor = $collection->find();
        return iterator_to_array($cursor);
    }
} 