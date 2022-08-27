import './bootstrap';

import { createApp } from 'vue'
import UsersComponent from "./components/UsersComponent";

const app = createApp({})

app.component('users-component', UsersComponent)

app.mount('#app')
