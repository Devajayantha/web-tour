<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventBatal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE DEFINER=`root`@`localhost` EVENT `event_batal` ON SCHEDULE EVERY 3 DAY STARTS '2018-05-12 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
        DECLARE id_book INT;
        SET id_book =(SELECT bookings.`id` FROM bookings WHERE DATEDIFF(departure, NOW())<=3 AND payment IS NULL GROUP BY id);
        UPDATE bookings SET payment='gagal' WHERE id=id_book;
    END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `event_batal`');
    }
}
