export const Card = (props) => {
    return (
      <div
        style={{
          display: "flex",
          flexDirection: "column",
          backgroundColor: props.backgroundColor,
          padding: "16px",
          width: "30vh",
          height: "40vh",
          boxShadow: "1px 6px 15px 0px rgba(0,0,0,0.42)",
        }}
      >
        <div style={{
  
        }}>
          <img
            width="60"
            height="60"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Circle-icons-gamecontroller.svg/2048px-Circle-icons-gamecontroller.svg.png"
          ></img>
          <p> hello bru</p>
        </div>
        <div
          style={{
            display: "flex",
            flexDirection: "row",
            backgroundColor: "#10101010",
          }}
        >
          <h1>{props.name}</h1>
          <p> </p>
        </div>
      </div>
    );
  }
  