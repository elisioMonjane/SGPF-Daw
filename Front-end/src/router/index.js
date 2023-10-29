import { createRouter, createWebHistory } from 'vue-router'
import Dashboard from '../views/Dashboard.vue'
import Form from '../views/Form.vue'
import Tables from '../views/Tables.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    
    {
      
        path:'/',
        name:'Login',
        component: ()=>import('../views/Login.vue')
      },
      {
path:'/Register',
name:'Register',
component:()=>import('../views/Register.vue')
      },
      {
      path:'/Dashboard',
      name:'Dashboard',
      component:Dashboard
    },
    {
      path:'/DashboardMedico',
      name:'DashboardMedico',
      component:()=>import('../views/DashboardMedico.vue')

    },
    {
      path:'/Cadastro',
      name:'Cadastro',
      component:()=>import('../views/Cadastro.vue')
    },{
      path:'/Agendamento',
      name:'Agendamento',
      component:()=>import('../views/Agendamento.vue')

    },
    {
      path:'/Form',
      name:'Form',
      component: Form
    }
    ,
    {
      path:'/Tables',
      name:'Tables',
      component: Tables
    },/*
    {
      path:'/Component',
      name:'Component',
      component:Component
    },*/
    {
      path:'/Notifications',
      name:'Notifications',
      component:()=>import('../views/Notifications.vue')
    },
    {
      path:'/Typography',
      name:'Typography',
      component:()=>import('../views/Typography.vue')
    },{
      path:'/Icons',
      name:'Icons',
      component: ()=>import('../views/Icons.vue')
    },
    
    {
      path:'/Relatorio',
      name:'Relatorio',
      component: ()=>import('../views/Relatorio.vue')
    },
    {
      path:'/Historico',
      name:'Historico',
      component:()=>import('../views/Historico.vue')
    }
    
  ]
})

export default router
