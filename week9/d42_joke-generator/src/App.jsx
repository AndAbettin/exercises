import './App.css';
import { useState, useEffect } from 'react';
import Joke from './Joke';

function App() {

  const [joke, setJoke] = useState(null);

  const loadData = async () => {
    const response = await fetch('https://v2.jokeapi.dev/joke/Any');
    const data = await response.json();

    if (data.type === "single") {
      setJoke(data);
    } else {
      const joke_sans_delivery = { ...data, delivery: null }
      setJoke(joke_sans_delivery);
      setTimeout(() => {
        setJoke(data);
      }, '3000');
    }
  }

  useEffect(() => {
    loadData();
  }, [])

  return (
    <div className="App">
      {
        joke === null
          ? <p>loading...</p>
          : <Joke joke={joke} />
      }
      <button onClick={loadData}>New joke!</button>
    </div>
  );
}

export default App;
