<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>People</title>
        <meta charset="utf-8">
    </head>

    <body>
        <div>
            <a href="{{ route('people.update') }}"><button>Update People</button></a>            
            <hr></hr>
            <table border="1" width="100%">
                <thead>
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