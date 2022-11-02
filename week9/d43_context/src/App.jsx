import Header from './Header';
import MainContent from './MainContent';
import LanguageContext from './LanguageContext';
import './App.scss';
import { useState } from 'react';

function App() {

  const [language, setLanguage] = useState('en');

  return (
    <LanguageContext.Provider value={{
      language,
      setLanguage
    }}>

      <div className="app">

        <Header />

        <MainContent />

      </div>

    </LanguageContext.Provider>

  );
}

export default App;
