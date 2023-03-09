import React from 'react'
import Header from './components/Header/Header'
import './App.css'
import {BrowserRouter ,Route,Link} from 'react-router-dom'

const App = () => {
  return (
    <div>
       
         <BrowserRouter>
          <Header/>
           
         
         </BrowserRouter>
       
    </div>
  )
}

export default App