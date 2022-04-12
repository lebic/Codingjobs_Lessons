export const ButtonGroup = (props) => {
  return (
    <div
      style={{
        display: "flex",
        justifyContent: "center",
        alignContent: "flex-start",
        flexDirection: "row",
        flexWrap: "wrap",

        width: "36vh",
        height: "19vh",
        outline: "none",
      }}
      id="artstyle-button-container"
      data-toggle="buttons"
      class="btn-group btn-group-toggle"
    >
      {/*HEAVY PAINTING*/}
      <div
        style={{
          display: "flex",
          justifyContent: "center",
          alignItems: "center",

          width: "16vh",
          height: "4vh",

          margin: "1vh",

          fontFamily: "'roboto',sans-serif",
          fontSize: "1.5vh",

          borderRadius: "2vh",
          borderColor: "#123456",

          outline: "none",
        }}
        class="btn-group-toggle"
        data-toggle="buttons"
      >
        <label class="artstyle-button btn ">
          <input  id="Heavy-Painting" type="checkbox" autocomplete="off" />
         
        </label>
      </div>

      {/*LIGHT PAINTING*/}
      <div class="btn-group-toggle" data-toggle="buttons">
        <label class="artstyle-button btn">
          <input id="Light-Painting" type="checkbox" autocomplete="off" />
          {props.answerB}
        </label>
      </div>
      {/*LINEART*/}
      <div class="btn-group-toggle" data-toggle="buttons">
        <label class="artstyle-button btn ">
          <input id="Lineart" type="checkbox" autocomplete="off" />
          {props.answerC}
        </label>
      </div>
      {/*COLORED SKETCH*/}
      <div class="btn-group-toggle" data-toggle="buttons">
        <label class="artstyle-button btn ">
          <input id="Color-sketch" type="checkbox" autocomplete="off" />
          {props.answerD}
        </label>
      </div>
      {/*SKETCH  */}
      <div class="btn-group-toggle" data-toggle="buttons">
        <label class="artstyle-button btn  ">
          <input id="Sketch" type="checkbox" autocomplete="off" />
          {props.answerE}
        </label>
      </div>
    </div>
  );
};
