import { useState } from "react";
import { useContext } from 'react';
import LanguageContext from "./LanguageContext";

export default function Preferences() {

    const { language, setLanguage } = useContext(LanguageContext);

    const changeLanguage = (event) => {
        setLanguage(event.target.value);
    }

    return (
        <div className="preferences">

            Language:
            <select
                onChange={changeLanguage}
                value={language}
            >
                <option value="en">English</option>
                <option value="cz">Czech</option>
            </select>

        </div>
    )
}