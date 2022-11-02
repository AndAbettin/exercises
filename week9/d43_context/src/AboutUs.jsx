import { useContext } from 'react';
import LanguageContext from "./LanguageContext";

export default function AboutUs() {

    const { language } = useContext(LanguageContext);

    return (
        <div className="about-us">

            {
                language === 'en'
                    ? (
                        <p>
                            We are the best at what we do
                        </p>
                    )
                    : (
                        <p>
                            Jsme nejlepší v tom, co děláme.
                        </p>
                    )
            }


        </div>
    )
}