<x-layout>
    <h2>Currently Available Ninjas</h2>
    <ul>
        @foreach ($tasks as $namesAndIds)

            <li>
                <x-card :href="'/home/' . $namesAndIds['id']" highlights="$namesAndIds['skill'] > 50">
                    <p>{{$namesAndIds["name"]}}</p>
                </x-card>

                <!-- <a href="/home/{{$namesAndIds["id"]}}">show the details</a> -->

            </li>
        @endforeach
    </ul>
</x-layout>