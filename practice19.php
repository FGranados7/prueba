<!DOCTYPE html>
<html>
<head>
    <title>Don't Detach it with v-show(37)</title>
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
</head>
<body>
<div id="app">
    <p style="color: blue">{{ description }}</p>
    <p v-if="show">You can see me..! <span>Hello..</span></p>
    <p v-else>Now you see me ..!</p>
    <template v-if="show">
        <h1>Heading</h1>
        <p>Inside a template</p>
    </template>
    <p v-show="show">Do you also see me?</p>
    <button @click="show = !show">Switch</button>
</div>

<script type="text/javascript">
    new Vue({
        el: '#app',
        data: {
            show: true,
            description : 'v-show: Muestra y oculta el elemento si cumple la condicion (true o false) segun sea el caso, este coloca el style=display:none'
        }
    });
</script>

</body>
</html>