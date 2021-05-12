<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $review = 'Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.';
        $resumen1 = "Geralt de Rivia, brujo y mutante sobrehumano, se gana la vida como cazador de monstruos en una tierra de magia y maravilla: con sus dos espadas al hombro -la de acero para hombres, y la de plata para bestias- da cuenta de estriges, manticoras, grifos, vampiros, quimeras y dragones, pero sólo cuando amenazan la paz. Irónico, cínico, descreído y siempre errante, sus pasos le llevan de pueblo en pueblo ofreciendo sus servicios, hallando las más de las veces que los auténticos monstruos se esconden bajo rostros humanos. En su camino sorteará intrigas, elegirá el mal menor, debatirá cuestiones de precio, hollará el confín del mundo y realizará su último deseo: así comienzan las aventuras del brujo Geralt de Rivia.";
        $resumen2 = "La vida de un brujo cazador de monstruos no es fácil. Tan pronto puede uno tener que meterse hasta el cuello en un estercolero para eliminar a la bestia carroñera que amenaza la ciudad, intentado no atrapar una infección incurable, como se puede encontrar unido a la cacería de uno de los últimos dragones, en la que la cuestión no es si los cazadores conseguirán matar a la pobre bestia, sino qué pasará cuando tengan que repartirse el botín. Magos, príncipes, estarostas, voievodas, druidas, vexlings, dríadas, juglares y criaturas de todo pelaje pueblan esta tierra, enzarzados en conflictos de supervivencia, codicia y amor, y entre ellos avanza, solitario, el brujo Geralt de Rivia.Andrzej Sapkowski es el gran renovador de la literatura fantástica de nuestros tiempos, un genio del lenguaje y la caracterización cuya prosa ya ha hechizado a millones de lectores en todo el mundo.";
        $resumen3 = "En verdad os digo que se acerca el tiempo de la espada y el hacha, la época de la tormenta salvaje. Se acerca el Tiempo del Invierno Blanco y de la Luz Blanca. El Tiempo de la Locura y el Tiempo del Odio, el Tiempo del Fin. El mundo morirá entre la escarcha y resucitará de nuevo junto con el nuevo sol. Resucitará de entre la Antigua Sangre, de Hen Ichaer, de la semilla sembrada. De la semilla que no germina sino que estalla en llamas. ¡Así será! ¡Contemplad las señales! Qué señales sean, yo os diré: primero se derramará sobre la tierra la sangre de los Aen Seidhe, la Sangre de los Elfos...\"Aen Ithlinnespeath, profecía de Ithlinne Aegli aep AevenienAndrzej Sapkowski es el gran renovador de la literatura fantástica de nuestros tiempos, un genio del lenguaje y la caracterización cuya prosa ya ha hechizado a millones de lectores en todo el mundo.";
        $resumen4 = "Decir que la conocí sería una exageración. Pienso que, excepto el brujo y la hechicera, nadie la conoció de verdad jamás. Cuando la vi por vez primera no me causó especial impresión, incluso pese a las extraordinarias circunstancias que lo acompañaron. Sé de algunos que han afirmado que al instante, a primera vista, percibieron el hálito de la muerte que seguía a esta muchacha. A mí sin embargo me pareció completamente normal, y ya por entonces sabía yo que no era normal, por eso me esforcé en mirar, descubrir, percibir lo extraordinario en ella. Pero nada vi y nada percibí. Nada que pudiera haber sido señal, presentimiento ni profecía de los trágicos acontecimientos posteriores. Aquéllos de los que fue causa. Y aquéllos que ella misma provocó.\"Jaskier, Medio siglo de poesía Andrzej Sapkowski es el gran renovador de la literatura fantástica de nuestros tiempos, un genio del lenguaje y la caracterización cuya prosa ya ha hechizado a millones de lectores en todo el mundo.";
        $resumen5 = "Juan Gómez-Jurado te atrapará con una historia policial que gira en torno a una mujer muy especial, Antonia Scott, quien a pesar de no ser criminalista ha resuelto casos peligrosos que ningún otro ha logrado y eso, le ha jugado en contra. Por alguna razón, Antonia lleva mucho tiempo escondida en un ático y el escuchar pasos cerca no le gusta, porque sea quien sea, está segura que viene por ella. Un exitoso thriller internacional que te atrapará de principio a fin con una emocionante lectura y personales bien estructurados, que apenas te dará tiempo de respirar.";
        $resumen6 = "Desarrollada en una Francia ocupada por los nazis, esta narración del género policiaco, más allá del odio, es considerado por muchos un grito de esperanza que relata de forma natural la experiencia, alegría, emoción y dolor infantil vivido en aquellos tiempos tan difíciles.Galardonado como un Best Seller, cuenta la historia real de un peluquero judío que toma la difícil decisión de separar a su familia en busca de su seguridad, dejando a dos pequeños que deben sobrevivir a un mundo lleno de miserias y violencia, uno de ellos es Joseph Joffo, el propio autor de este libro.";
        $resumen7 = "En la adormecida e idílica Comarca, un joven hobbit recibe un encargo: custodiar el Anillo Único y emprender el viaje para su destrucción en la Grieta del Destino. Acompañado por magos, hombres, elfos y enanos, atravesará la Tierra Media y se internará en las sombras de Mordor, perseguido siempre por las huestes de Sauron, el Señor Oscuro, dispuesto a recuperar su creación para establecer el dominio definitivo del Mal.";
        $resumen8 = "La Compañía se ha disuelto y sus integrantes emprenden caminos separados. Frodo y Sam continúan solos su viaje a lo largo del río Anduin, perseguidos por la sombra misteriosa de un ser extraño que también ambiciona la posesión del Anillo. Mientras, hombres, elfos y enanos se preparan para la batalla final contra las fuerzas del Señor del Mal.";
        $resumen9 = "Los ejércitos del Señor Oscuro van extendiendo cada vez más su maléfica sombra por la Tierra Media. Hombres, elfos y enanos unen sus fuerzas para presentar batalla a Sauron y sus huestes. Ajenos a estos preparativos, Frodo y Sam siguen adentrándose en el país de Mordor en su heroico viaje para destruir el Anillo de Poder en las Grietas del Destino.";

        $this->insert([
            ['isbn' => 'isbn',
                'author' => 'Andrzej Sapkowski',
                'title' => 'El último deseo',
                'review' => $resumen1,
                'category' => 'adventure',
                'book_cover_route' => '/assets/img/books/covers/1.jpg',
            ],
            ['isbn' => 'isbn',
                'author' => 'Andrzej Sapkowski',
                'title' => 'La espada del destino',
                'review' => $resumen2,
                'category' => 'adventure',
                'book_cover_route' => '/assets/img/books/covers/2.jpg',
            ],
            ['isbn' => 'isbn',
                'author' => 'Andrzej Sapkowski',
                'title' => 'La sangre de los elfos',
                'review' => $resumen3,
                'category' => 'adventure',
                'book_cover_route' => '/assets/img/books/covers/3.jpg',
            ],
            ['isbn' => 'isbn',
                'author' => 'Andrzej Sapkowski',
                'title' => 'Tiempo de odio',
                'review' => $resumen4,
                'category' => 'adventure',
                'book_cover_route' => '/assets/img/books/covers/4.jpg',
            ],
            ['isbn' => 'isbn',
                'author' => 'Juan Gómez-Jurado',
                'title' => 'Reina Roja',
                'review' => $resumen5,
                'category' => 'detective',
                'book_cover_route' => '/assets/img/books/covers/5.jpg',
            ],
            ['isbn' => 'isbn',
                'author' => 'Joseph Joffo',
                'title' => 'Un saco de canicas',
                'review' => $resumen6,
                'category' => 'detective',
                'book_cover_route' => '/assets/img/books/covers/6.jpg',
            ],
            ['isbn' => 'isbn',
                'author' => 'J.R.R. Tolkien',
                'title' => 'La comunidad del anillo',
                'review' => $resumen7,
                'category' => 'adventure',
                'book_cover_route' => '/assets/img/books/covers/7.jpg',
            ],
            ['isbn' => 'isbn',
                'author' => 'J.R.R. Tolkien',
                'title' => 'Las dos torres',
                'review' => $resumen8,
                'category' => 'adventure',
                'book_cover_route' => '/assets/img/books/covers/8.jpg',
            ],
            ['isbn' => 'isbn',
                'author' => 'J.R.R. Tolkien',
                'title' => 'El retorno del rey',
                'review' => $resumen9,
                'category' => 'adventure',
                'book_cover_route' => '/assets/img/books/covers/9.jpg',
            ],
//            $this->newBook('Title 7', 'Review 7: ' . $review),
//            $this->newBook('Title 8', 'Review 8: ' . $review),
//            $this->newBook('Title 9', 'Review 9: ' . $review),
//            $this->newBook('Title 10', 'Review 10: ' . $review)
        ]);
//        $this->insert(function () {
//            $books = array();
//            $i = 1;
//            $n = 10;
//            echo 'debug_1';
//            do {
//            echo 'debug_2';
//                array_push($books, $this->newBook(
//                    'Title ' . $i,
//                    'Review ' . $i
//                ));
//            } while($i <= $n);
//            return $books;
//        });
    }

//    ------------------------------------------------------------------------------------------------
    public function newBook($title, $review) {
        return [
            'title' => $title,
            'review' => $review
        ];
    }

//    ------------------------------------------------------------------------------------------------

    public function insert($books) {

        foreach ($books as $book) {
            DB::table('books')->insert($book);
        }
    }

    public function makeFakeBooks($n) {
        $this->insert(function() use($n) {
            $books = null;
            for ($i = 0; $i < $n; $i++) {
                $books += $this->newBook(
                    'Title ' . ($i+1),
                    'Review ' . ($i+1)
                );
            }
            return $books;
        });
    }

//    ------------------------------------------------------------------------------------------------
}
