

export default function Day(weather) {

    const report = () => {
        console.log(weather.day);
    }

    return (
        <div className="day">
            <h2 onClick={report}>{weather.day}</h2>
            <p>Min: C{weather.min}  |  F{(weather.min * 9 / 5) + 32}</p>
            <p>Max: C{weather.max}  |  F{(weather.min * 9 / 5) + 32}</p>
        </div>
    )
}