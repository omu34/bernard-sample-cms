<section class="py-8">
    <div class="mx-auto max-w-7xl p-12 bg-black rounded-xl" >
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-green-800">
                <tbody class="divide-y divide-green-800">
                    @foreach ($benefits as $benefit)
                        <tr class="divide-x divide-green-800">
                            <td class="whitespace-nowrap hilmar py-4 pl-4 pr-4 text-2xl font-medium text-white sm:pl-0">{{$benefit->title}}</td>
                            <td class=" p-4 text-base text-white">{{$benefit->description}}</td>          
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> 
</section>
