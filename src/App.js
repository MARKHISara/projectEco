import React from 'react';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Home from './view/Home'
import Simulateur from './view/Simulateur'
import Signup from './view/Signup'
import Inscrire from './view/Inscription'
import Expert from './view/Expert'
import ProjctCard from './view/ProjctCard'
import Service from './view/Service'
import Apprendre from './view/Apprendre'
import EnergyDashboard from './Components/profile/Dashboard'

function App() {
  return (
    <BrowserRouter>
      <Routes> 
      <Route path="/" element={<Home />} />
      <Route path="Simulateur" element={<Simulateur />} />
      <Route path="Signup" element={<Signup />} />
      <Route path="Inscription" element={<Inscrire />} />
      <Route path="Expert" element={<Expert />} />
      <Route path="cartes" element={<ProjctCard />} />
      <Route path="service" element={<Service />} />
      <Route path="Apprendre" element={<Apprendre />} />
      <Route path="Energydashboard" element={<EnergyDashboard />} />
      </Routes>
      </BrowserRouter>
    

  );
}

export default App;
