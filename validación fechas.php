<?php
public function store(Request $request)
{
    $validated = $request->validate([
        'pelicula_id' => 'required|exists:peliculas,id',
        'fecha_hora' => [
                            'required',
                            'date_format:Y-m-d H:i:s',
                            'after_or_equal: 2024-12-07 00:00:00', //Minima
                            'before_or_equal: 2024-12-31 23:59:59' //Maxima
                        ]
        ]);
}