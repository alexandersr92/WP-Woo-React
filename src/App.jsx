import { BrowserRouter } from 'react-router-dom'
import { Header } from './components/template-parts/NavMenu/Header'
import {AppRouter} from './router/Routes'

function App() {
  




  return (
    <>
   
      <BrowserRouter>
        <Header/>
          <h1 className="text-3xl font-bold underline bg-red-500">
          Hello world!

        </h1>
        <AppRouter/>
      </BrowserRouter>


    </>
  )
}

export default App
