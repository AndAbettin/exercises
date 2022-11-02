

export default function Joke({ joke }) {

    const payoff = () => {
        return (<p>{joke.delivery}</p>);
    }

    return (
        <div className="haha">
            {
                joke.type === "single"
                    ? <h3>{joke.joke}</h3>
                    :
                    <>
                        <h3>{joke.setup}</h3>
                        <p>{joke.delivery}</p>
                    </>
            }
        </div>
    )
}