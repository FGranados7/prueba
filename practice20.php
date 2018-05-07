<!DOCTYPE html>
<html>
<head>
    <title>Rendering List with v-for(38,39,40)</title>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
</head>
<body>
<div id="app">
    <p style="color: blue">{{ description }}</p>
    <ul>
        <li v-for="ingredient in ingredients">{{ ingredient }}</li>
    </ul>

    <h4>=== Mostrando indice (Getting the Current Index (39)) ===</h4>
    <ul>
        <li v-for="(ingredient,index) in ingredients">{{ ingredient }} ({{ index }})</li>
    </ul>

    <h4>=== Mostrando arreglo en template (Using an Alternative v-for Syntax(40)) ===</h4>
    <template v-for="(ingredient,i) in ingredients">
        <h3>{{ ingredient }}</h3>
        <p>({{ i }})</p>
    </template>

    <h4>=== Mostrando arreglo de objetos (Looping through Objects(41)) ===</h4>
    <ul>
        <li v-for="person in persons">
            <div v-for="(value, key, index) in person">
                {{ key }} : {{ value }} ({{ index }})
            </div>
        </li>
    </ul>

    <h4>=== Creando y recorriendo arreglo del 0 al 10 (Looping throught a List of Numbers(42)) ===</h4>
    <ul>
        <li v-for="n in 10">{{ n }}</li>
    </ul>
</div>

<script type="text/javascript">
    new Vue({
        el: '#app',
        data: {
            description: 'Adding this text for update it in Git',
            ingredients: ['meat', 'fruit', 'cookies'],
            persons: [
                {name: 'Max', age: 27, color: 'red'},
                {name: 'Anna', age: 'unknown', color: 'blue'}
            ]
        }
    });
</script>

</body>
</html>