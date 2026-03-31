<x-layout>
    <div class="{{ $cssClass }}">
        Hello World
    </div>
    <input type="text" value="{{$name}}" placeholder="Введите имя:"><br><br>
    <input type="text" value="{{$surname}}" placeholder="Введите фамилию:"><br><br>
    <input type="text" value="{{$age}}" placeholder="Введите возраст:"><br><br>
    <button type="submit">Отправить</button>
</x-layout>