import React from 'react';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Home from './view/Home'
import Simulateur from './view/Simulateur'
import Signup from './view/Signup'
import Inscrire from './view/Inscription'
import Expert from './view/Expert'
import ProjctCard from './view/ProjctCard'


function App() {
  return (
    <BrowserRouter>
      <Routes> 
      <Route path="/" element={<Home />} />
      <Route path="Simulateur" element={<Simulateur />} />
      <Route path="Signup" element={<Signup />} />
      <Route path="Inscription" element={<Inscrire />} />
      <Route path="Expert" element={<Expert />} />
      <Route path="Card" element={<ProjctCard />} />
      </Routes>
      </BrowserRouter>
    

  );
}

export default App;
