const info = async () =>{

    const mars = "https://api.nasa.gov/insight_weather/?api_key=KAHHcwbDzwVGHLuXFRV97jeZVLR4Nwa7woEOGOgt&feedtype=json&ver=1.0";

    const data = await fetch(mars);

    const response = await data.json(data)

    console.log(response);
 
}

