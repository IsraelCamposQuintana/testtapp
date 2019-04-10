@extends('layouthd')


@section('contenido')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 " style="background:#a1cbef; font-size: large;margin-top: 20px" >
            Bienvenido al foro en español sobre programación en Dart
            Lenguaje multiplataformas para aplicaciones móviles.
        </div>
        <div class="col-lg-4" style="background:#a1cbef; font-size: large; margin-top: 20px">
            <a>Dart Hello World Code</a>
            <pre style="background-color: #d6e9f9"> <code style="text-emphasis-style: open  ">
// Copyright 2015 the Dart project authors. All rights reserved.
// Use of this source code is governed by a BSD-style license
// that can be found in the LICENSE file.
    void main() {
          for (var i = 0; i < 4; i++) {
            print('hello $i');
          }
        }
                </code></pre>
        </div>
    </div>




</div>
@endsection
@extends('layoutfoot')

