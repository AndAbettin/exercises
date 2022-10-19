import logo from './logo.svg';
import './App.css';
import { useState, useEffect } from 'react'



function App() {
  const [catFact, setCatFact] = useState(null)

  const fetchData = async () => {
    // const response = await fetch('https://catfact.ninja/fact')
    const response = await fetch('http://www.cbp-exercises.test/week5/d25_morning_workout/')
    const data = await response.json()
    setCatFact(data.fact)
  }

  useEffect(() => {
    fetchData()
  }, [])

  return (
    <div>
      <h2>Random Cat Fact</h2>

      {!catFact
        ?
        <p>LOADING</p>
        :
        <p>{catFact}</p>
      }

    </div>
  );
}


export default App;
