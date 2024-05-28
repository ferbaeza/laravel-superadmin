import React from 'react';
import ReactDOM from 'react-dom/client';
import Layaout from './pages/Layaout/Layaout';
import { BrowserRouter } from 'react-router-dom';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <BrowserRouter basename='/admin'>
  <React.StrictMode>
    <Layaout />
  </React.StrictMode>
</BrowserRouter>
);
