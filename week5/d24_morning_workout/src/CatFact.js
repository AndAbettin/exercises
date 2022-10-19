import { useState, useEffect } from 'react'


const CatFact = () => {
    const [data, setData] = useState(null)
    const [dataLoaded, setDataLoaded] = useState(false)
    const fetchData = async () => {
        const response = await fetch('https://catfact.ninja/fact')
        const data = await response.json()
        setData(data)
        setDataLoaded(true)
    }

    useEffect(() => {
        fetchData()
    }, [])

    return (
        <div>
            {!dataLoaded ?
                <p>Loading</p> :
                <p>{data.text}</p>
            }
        </div>
    )
}

export default CatFact