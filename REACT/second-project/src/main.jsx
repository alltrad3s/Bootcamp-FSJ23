import { StrictMode } from 'react'
import { createRoot } from 'react-dom/client'
import App from './App.jsx'
import './assets/css/index.css'

createRoot(document.getElementById('root')).render(
  //Al agregar StrictMode es como una verificacion para confirmar que el ciclo de vida
  //del componente se complete sin errores.
  <StrictMode> 
    <App />
  </StrictMode>,
)
 