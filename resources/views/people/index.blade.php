<!DOCTYPE html>
<html lang="pt-br">
    <head>        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.css" integrity="sha512-h1rwF0uB6r2IuEZcyjPrR53bBKN9Wb4yL+w3Rdlzmc3CkBF1gMSFvQIIstnu4bEtYDaKca5ke5S8UBAACRImyg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>People</title>
    </head>

    <body>
        <div>
            <a href="{{ route('people.update') }}">
                <button class="btn btn-outline-primary">Update People</button>
            </a>            
            <table border="1" width="100%" class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Height</th>
                        <th>Mass</th>
                        <th>Hair Color</th>
                        <th>Skin Color</th>
                        <th>Eye Color</th>
                        <th>Birth Year</th>
                        <th>Gender</th>
                    </tr>
                </thead>
                @foreach ($people as $person)
                    <tr>
                        <td>{{ $person->name }}</td>
                        <td>{{ $person->height }}</td>
                        <td>{{ $person->mass }}</td>
                        <td>{{ $person->hair_color }}</td>
                        <td>{{ $person->skin_color }}</td>
                        <td>{{ $person->eye_color }}</td>
                        <td>{{ $person->birth_year }}</td>
                        <td>{{ $person->gender }}</td>
                    </tr>
                @endforeach                
            </table>
        </div>
    </body>
</html>