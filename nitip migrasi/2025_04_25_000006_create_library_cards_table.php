 <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        public function up(): void
        {
            Schema::create('library_cards', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->string('barcode')->unique();
                $table->date('issued_date');
                $table->boolean('status')->default(true);
                $table->timestamps();
            });
        }

        public function down(): void
        {
            Schema::dropIfExists('library_cards');
        }
    };
