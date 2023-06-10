@extends("layouts.app")
@section("hello")

    {{-- <table border="1">
        <tr>
            <td>titre</td>
            <td>pages</td>
            <td>description</td>
            <td>image</td>
            <td>categorie_id</td>
        </tr>
        @foreach($livres as $livre)
        <tr>
            <td>{{$livre->titre}}</td>
            <td>{{$livre->pages}}</td>
            <td>{{$livre->description}}</td>
            <td><a href="/categories/{{$livre->id}}/books">see books</a></td>
        </tr>
        @endforeach --}}
    </table>
    <div>

        <h1>liveres :</h1>
        <div class="flex justify-center">
            <div class="overflow-x-auto  sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-80 text-left text-sm font-light">
                    <thead class="border-b font-medium bg-slate-500 dark:border-neutral-500">
                      <tr class="">
                        <th class="p-20" style="padding: 2rem">titre</th>
                        <th>Description</th>
                        <th>Pages</th>
                        <th class="px-2">Update info</th>
                        <th class="px-2">Delete info </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($livres as $item)
                      <tr class="border-b dark:border-neutral-500">
                        <td class="whitespace-nowrap px-4 py-4 font-medium">{{$item->titre}}</td>
                        <td class="whitespace-nowrap px-4 py-4">{{$item->description}}</td>
                        <td class="whitespace-nowrap px-4 py-4">{{$item->pages}}</td>
                        <td class="whitespace-nowrap bg-slate-500 text-green-800 px-6 py-6">
                          <a href="{{route("edit",$item->id)}}" class="bg-red-400 rounded text-blue-6">edit</a>
                        </td>
                        <td class="whitespace-nowrap bg-slate-500 text-green-800 px-6 py-6">
                          <form action="/catgories/{{$item->id}}" method="POST" >
                          @csrf
                          @method("DELETE")
                          <button href="" class="bg-red-400 rounded text-blue-6">Delete</button>
                          </form>
                        </td>
                      </tr>
              @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         <a class="text-xl" href="{{route('create')}}">redirect me </a>
    </div>
    @endsection
