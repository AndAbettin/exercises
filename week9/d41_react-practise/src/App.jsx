import logo from './logo.svg';
import './App.css';
import { useState, useEffect } from 'react';
import Counter from './Counter';

function App() {
  return (
    <div className="App">

      <Counter />
      <Counter />
      <Counter />

    </div>
  );
}

export default App;
