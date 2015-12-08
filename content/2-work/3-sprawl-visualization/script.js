/*
 *  Code for the Urban Sprawl visualizations.
 */

// Sets up initial static variables
var width = 1000;
var height = 600;

var scatterplot_width = 1000;
var scatterplot_height = 600;

var starPlotCentreX = width / 2;
var starPlotCentreY = height / 2;
var starPlotRadius = 200;
var starPlotSides = 5;
var starPlotTicks = 10;

// Boolean to check if this is the first time the system has run the script
var firstRun = true;

// Global array containing all data
var public_dataset = [];

// Global array containing current cities that are displayed
var displayed_datasets = [];

// Global array that contains all data according to columns
var dataset_columns = [];

// Global array that keeps track of selected cities to be drawn
var selected_cities = [];

// Current filters to be displayed at first run for starplot
var cur_filters = ["sprawl_1976_92", "central_empl_1977", "ruggedness_msa", "road_density", "rest_bars"];

// Global variables to detect current min/max values for drawing starplot componenets
var cur_minValue, cur_maxValue;

// Global arrays of one type of variable
var sprawl_7692Array;
var sprawl_92Array;
var sprawl_76Array;
var employmentArray;
var decpopgr_2070Array;
var aquifierArray;
var elevationrangeArray;
var ruggednessArray;
var coolingArray;
var heatingArray;
var restaurantsArray;
var roaddensityArray;
var popgr_7090Array;
var divisionArray;

// Arrays used to contain values according to dropdown selection of the scatterplot (x, y, color)
var dataArrayX;
var dataArrayY;
var dataArrayColors;

var gradientColorScale;


// Create a svg element for the scatterplot
var svg_scatterplot = d3.select("#scatterplot-svg-div")
                       .append("svg")
                       .attr("width", scatterplot_width)
                       .attr("height", scatterplot_height);

var scatterMouseOverLineGroup;

var padding = {top: 50, bottom: 45, left: 60, right: 15};

// Used as identifiers for the x-axis, y-axis, node coloring, and filters
var x_axis_label = "sprawl_1976_92";
var y_axis_label = "central_empl_1977";
var color_value_label = "sprawl_1976_92";
var division_value = "0";

var randomColor = d3.scale.category10();



// Create a svg element for the starplot
var svg = d3.select("#starplot-svg-div")
            .append("svg")
            .attr("width", width)
            .attr("height", height);

// Create a group containing only the outline of the starplot
svg.append("g")
    .attr("id", "outline-canvas")
    .attr("transform", "translate(" + starPlotCentreX + ", " + starPlotCentreY + ")");

// Create a group containing only the points of the starplot
svg.append("g")
    .attr("id", "city-drawing-canvas")
    .attr("transform", "translate(" + starPlotCentreX + ", " + starPlotCentreY + ")");


loadDataset();


/*
 *  Loads dataset from csv file and sets up the initial variables.
 */
function loadDataset() {
    d3.csv("sprawl_msa.csv", 

        function (error, data) {
            displayed_datasets.length = 0;
            data.forEach(function(data) {
                public_dataset.push(data);
                dataset = data;
            });

            setupVariables(public_dataset);
    
        }

    );
}

/*
 *  Sets up the arrays from the csv data and stores these objects into a global array.
 *  Uses switch statements to use different data according to what the x-axis, y-axis, and color labels refer to.
 *  Draws resulting scatterplot.
 */
function setupVariables(dataset) {

    sprawl_7692Array = makeFieldObject(dataset, "sprawl_1976_92");
    sprawl_92Array = makeFieldObject(dataset, "sprawl_1992");
    sprawl_76Array = makeFieldObject(dataset, "sprawl_1976");
    employmentArray = makeFieldObject(dataset, "central_empl_1977");
    decpopgr_2070Array = makeFieldObject(dataset, "avg_dec_popgr1920_70");
    popgr_7090Array = makeFieldObject(dataset, "popgr_1970_90");
    aquifierArray = makeFieldObject(dataset, "pc_aquifer_msa");
    elevationrangeArray = makeFieldObject(dataset, "elevat_range_msa");
    ruggednessArray = makeFieldObject(dataset, "ruggedness_msa");
    coolingArray = makeFieldObject(dataset, "cooling_dd");
    heatingArray = makeFieldObject(dataset, "heating_dd");
    restaurantsArray = makeFieldObject(dataset, "rest_bars");
    roaddensityArray = makeFieldObject(dataset, "road_density");
    divisionArray = makeFieldObject(dataset, "division");

    dataset_columns.push(sprawl_7692Array, sprawl_92Array, sprawl_76Array,
        employmentArray, decpopgr_2070Array, popgr_7090Array,
        aquifierArray, elevationrangeArray, ruggednessArray,
        coolingArray, heatingArray, restaurantsArray,
        roaddensityArray, divisionArray);

    if (firstRun == true) {
        drawOutline();
        firstRun = false;
    }


    // switch statements to use different data according to label
    switch(x_axis_label) {
        case "sprawl_1976_92":
            dataArrayX = sprawl_7692Array.data; 
            break;
        case "sprawl_1992":
            dataArrayX = sprawl_92Array.data; 
            break;
        case "sprawl_1976":
            dataArrayX = sprawl_76Array.data; 
            break;
        case "central_empl_1977":
            dataArrayX = employmentArray.data;
            break;
        case "avg_dec_popgr1920_70":
            dataArrayX = decpopgr_2070Array.data; 
            break;
        case "popgr_1970_90":
            dataArrayX = popgr_7090Array.data;
            break;
        case "pc_aquifer_msa":
            dataArrayX = aquifierArray.data; 
            break;
        case "elevat_range_msa":
            dataArrayX = elevationrangeArray.data;
            break;
        case "ruggedness_msa":
            dataArrayX = ruggednessArray.data;
            break;
        case "road_density":
            dataArrayX = roaddensityArray.data;
            break;
        case "rest_bars":
            dataArrayX = restaurantsArray.data;
            break;
        case "cooling_dd":
            dataArrayX = coolingArray.data;
            break;
        case "heating_dd":
            dataArrayX = heatingArray.data;
            break;
    }

    switch(y_axis_label) {
        case "sprawl_1976_92":
            dataArrayY = sprawl_7692Array.data; 
            break;
        case "sprawl_1992":
            dataArrayY = sprawl_92Array.data; 
            break;
        case "sprawl_1976":
            dataArrayY = sprawl_76Array.data; 
            break;
        case "central_empl_1977":
            dataArrayY = employmentArray.data;
            break;
        case "avg_dec_popgr1920_70":
            dataArrayY = decpopgr_2070Array.data; 
            break;
        case "popgr_1970_90":
            dataArrayY = popgr_7090Array.data;
            break;
        case "pc_aquifer_msa":
            dataArrayY = aquifierArray.data; 
            break;
        case "elevat_range_msa":
            dataArrayY = elevationrangeArray.data;
            break;
        case "ruggedness_msa":
            dataArrayY = ruggednessArray.data;
            break;
        case "road_density":
            dataArrayY = roaddensityArray.data;
            break;
        case "rest_bars":
            dataArrayY = restaurantsArray.data;
            break;
        case "cooling_dd":
            dataArrayY = coolingArray.data;
            break;
        case "heating_dd":
            dataArrayY = heatingArray.data;
            break;
    }

    switch(color_value_label) {
        case "sprawl_1976_92":
            dataArrayColors = sprawl_7692Array.data; 
            break;
        case "sprawl_1992":
            dataArrayColors = sprawl_92Array.data; 
            break;
        case "sprawl_1976":
            dataArrayColors = sprawl_76Array.data; 
            break;
        case "central_empl_1977":
            dataArrayColors = employmentArray.data;
            break;
        case "avg_dec_popgr1920_70":
            dataArrayColors = decpopgr_2070Array.data; 
            break;
        case "popgr_1970_90":
            dataArrayColors = popgr_7090Array.data;
            break;
        case "pc_aquifer_msa":
            dataArrayColors = aquifierArray.data; 
            break;
        case "elevat_range_msa":
            dataArrayColors = elevationrangeArray.data;
            break;
        case "ruggedness_msa":
            dataArrayColors = ruggednessArray.data;
            break;
        case "road_density":
            dataArrayColors = roaddensityArray.data;
            break;
        case "rest_bars":
            dataArrayColors = restaurantsArray.data;
            break;
        case "cooling_dd":
            dataArrayColors = coolingArray.data;
            break;
        case "heating_dd":
            dataArrayColors = heatingArray.data;
            break;
    }

    drawScatterplot(dataset, dataArrayX, dataArrayY, dataArrayColors);

}

/*
 *  Creates arrays of one type.
 *  Returns an array object containing name, data, min/max
 */

function makeFieldObject(objectArray, fieldName){
    var fieldArray = [];
    var tempValues = [];

    //alter for int/string vars
    objectArray.forEach(function(obj){
        if (fieldName == "msa_name") {
            tempValues.push(obj[fieldName]);
        } 
        else {
            tempValues.push(+obj[fieldName]);

            fieldArray["min"] = d3.min(tempValues);
            fieldArray["max"] = d3.max(tempValues);
        }
    });

    fieldArray["name"] = fieldName;
    fieldArray["data"] = tempValues;

    return fieldArray;
}

/*
 *  Draws the scatterplot visualization
 */
function drawScatterplot(dataset, dataArray1, dataArray2, dataArray3) {

    var xArray = makeFieldObject(dataset, x_axis_label);
    var yArray = makeFieldObject(dataset, y_axis_label);
    var colorValueArray = makeFieldObject(dataset, color_value_label);

    var xDomain = [xArray.min, xArray.max];
    var xRange = [padding.left, width-padding.right];  
    var xScale = d3.scale.linear()
                    .range(xRange)
                    .domain(xDomain);

    var yDomain = [yArray.min, yArray.max];
    var yRange = [height-padding.bottom, padding.top];
    var yScale = d3.scale.linear()
                    .range(yRange)
                    .domain(yDomain);

    drawXAxis(xScale);
    drawYAxis(yScale);
    drawScatterplotLabel();

    var coordPoints = convertToCoords(dataArray1, dataArray2, dataArray3);


    // A color gradient scale. Using the method call gradientColorScale(value), this will
    // plot a data value and determine a color in between green and red.
    gradientColorScale = d3.scale.linear()
        .range(["green", "red"])
        .domain(colorValueArray.data);

    drawColorScale(gradientColorScale, dataArray3);

    drawPoints(svg_scatterplot, coordPoints, xScale, yScale, gradientColorScale);

}

/*
 *  Draws the scaled x-axis with its label
 */
function drawXAxis(xScale){
    var xAxis = d3.svg.axis()
                .scale(xScale)
                .orient("bottom");
    svg_scatterplot.append("g")
        .attr("class", "axis")
        .attr("id", "x-axis")
        .attr("transform", "translate(0,"+(height-padding.bottom)+")")
        .call(xAxis);


    d3.select("#x-axis")
        .append("text")
        .attr("x", scatterplot_width / 2)
        .attr("y", 40)
        .style("text-anchor", "middle")
        .text(x_axis_label);


}

/*
 *  Draws the scaled y-axis with its label
 */
function drawYAxis(yScale){
    var yAxis = d3.svg.axis()
                .scale(yScale)
                .orient("left");

    svg_scatterplot.append("g")
        .attr("class", "axis")
        .attr("id", "y-axis")
        .attr("transform", "translate("+padding.left+",0)")
        .call(yAxis);

    d3.select("#y-axis")
        .append("text")
        .attr("transform", "rotate(-90)")
        .attr("x", -(scatterplot_height / 2))
        .attr("y", -45)
        .style("text-anchor", "middle")
        .text(y_axis_label);
}

/*
 *  Draws the title for the scatterplot
 */
function drawScatterplotLabel() {
    var scatterplot_title_string = x_axis_label + " (x) vs. " + y_axis_label + 
        " (y) vs. " + color_value_label + " (color)";
    d3.select("#scatterplot-svg-div svg")
        .append("text")
        .attr("id", "scatterplot-title")
        .attr("x", scatterplot_width / 2)
        .attr("y", 30)
        .style("text-anchor", "middle")
        .text(scatterplot_title_string);

    scatterMouseOverLineGroup = d3.select("#scatterplot-svg-div svg").append("g")
        .attr("id", "lines-group");
}

/*
 *  Convert preexisting arrays with one type of variable into a single array of
 *  objects.
 *  Array parameter order: x, y, color
 */
function convertToCoords(array1, array2, array3) {
    var newArray = [];
    for (var i = 0, len = array1.length; i < array1.length; i++) {
        var tempObject = {x: array1[i], y: array2[i], colorVal: array3[i], id: i};
        newArray.push(tempObject);
    }
    return newArray;
}

/*
 *  Draws scatterplot points with IDs for retrieval of city index.
 */
function drawPoints(svg_scatterplot, coordPoints, xScale, yScale, gradientColorScale) {
    svg_scatterplot.selectAll("circle")
        .data(coordPoints)
        .enter()
        .append("circle")
        .attr("id", function(d, i) {
            return "scatterplot-city-" + i;
        })
        .filter(function(d, i) {
            // filter according to division value
            if (division_value > 0) {
                return public_dataset[d.id].division == division_value;
            }
            // display all divisions
            else {
                return public_dataset[d.id].division;
            }
            
        })
        .attr("cx", function (d,i){
            return xScale(d.x);
        })
        .attr("cy", function (d,i){
            return yScale(d.y);
        })
        .attr("r", 4)
        .attr("fill", function(d, i) {
            return gradientColorScale(d.colorVal);
        })

        .attr("class", "unclicked")

        .on("click", scatterClickedFn)
        .on("mouseover", scatterMouseOverFn)
        .on("mouseout", scatterMouseOutFn);


}

/*
 *  When a city point is clicked on the scatterplot, plot data associated with the city 
 *  on the starplot visualization.
 */
var scatterClickedFn = function(d, i) {
    var point = d3.select(this);
    var thisColor = randomColor(i);

    // unclicked to clicked
    if (d3.select(this).attr("class") == "unclicked") {
        d3.select(this)
            .attr("r", 7)
            .attr("stroke", thisColor)
            .attr("stroke-width", 4)
            .attr("class", "clicked");

        drawStarPlot(d.id, thisColor);
        selected_cities.push({id: d.id, color: thisColor});
    } 
    // clicked to unclicked
    else if (d3.select(this).attr("class") == "clicked") {
        d3.select(this)
            .transition()
            .attr("r", 4)
            .attr("stroke", "none")
            .attr("class", "unclicked");

        // removing cities
        var pointID = d3.select(this).attr("id");
        selected_cities.forEach(function(obj, i){
            var tempID = "scatterplot-city-"+obj.id;
            if (pointID == tempID) {
                selected_cities.splice(i, 1);
                updateStarAxes();
            } 
            
        });
    }

}

/*
 *  Mouseover function for scatterplot
 *  Draws the tooltip containing city name.
 *  Draws guidelines for city point.
 */
var scatterMouseOverFn = function(d, i) {
    var point = d3.select(this);
    point
        .transition()
        .attr("r", 7);
    
    var current_object = public_dataset[d.id];

    //draw tooltip
    d3.select("#tooltip-scatterplot")
        .style("visibility", "visible")
        // declare d3.event to make this work in Firefox
        .style("top", (d3.event.pageY-15)+"px").style("left",(d3.event.pageX+20)+"px")
        .html("<strong>" + current_object.msa_name + "</strong>")
        .style("opacity", 0.0)
        .transition()
        .style("opacity", 1.0);

    //draws guidelines
    scatterMouseOverLineGroup.append("line")
        .attr("id", "x-line")
        .attr("x1", point.attr("cx"))
        .attr("y1", point.attr("cy"))
        .attr("x2", point.attr("cx"))
        .attr("y2", height-padding.bottom)
        .style("stroke", "black")
        .style("opacity", 0.0)
        .transition()  // fade-in transition effect
        .style("opacity", 0.3);
        
    scatterMouseOverLineGroup.append("line")
        .attr("id", "y-line")
        .attr("x1", point.attr("cx"))
        .attr("y1", point.attr("cy"))
        .attr("x2", padding.left)
        .attr("y2", point.attr("cy"))
        .style("stroke", "black")
        .style("opacity", 0.0)
        .transition()  // fade-in transition effect
        .style("opacity", 0.3);     

};

/*
 *  Mouseout function for scatterplot
 *  Removes tooltip and guidelines.
 */
var scatterMouseOutFn = function(d, i) {
    if (d3.select(this).attr("class") == "unclicked") {
        d3.select(this)
            .transition()
            .attr("r", 4);
    } 
    
    scatterMouseOverLineGroup.select("#x-line").remove();
    scatterMouseOverLineGroup.select("#y-line").remove();

    d3.select("#tooltip-scatterplot").style("visibility", "hidden");
};  

/*
 *  Removes scatterplot and creates a new one.
 *  Clears cities from starplot.
 */
function clearVisualization(clearStarplotValues){

    d3.select("#scatterplot-svg-div svg").remove();


    svg_scatterplot = d3.select("#scatterplot-svg-div")
                       .append("svg")
                       .attr("width", scatterplot_width)
                       .attr("height", scatterplot_height);


    if (clearStarplotValues == true) {
        clearCities();
    } 
}

/*
 *  Updates scatterplot axes using form data.
 *  Redraws the points for its new x-axis, y-axis, and color variables
 */
function updateAxes() {
    clearVisualization(false);

    // get element from form
    x_axis_label = document.getElementById("x-axis-select").value;
    y_axis_label = document.getElementById("y-axis-select").value;
    color_value_label = document.getElementById("color-value-select").value;

    setupVariables(public_dataset);

}

/*
 *  Updates scatterplot axes using form data.
 *  Clears starplot.
 *  Redraws the points for its new x-axis, y-axis, color, and division variables
 */
function updateDivisionFilters() {
    clearVisualization(true);

    // get element from form
    x_axis_label = document.getElementById("x-axis-select").value;
    y_axis_label = document.getElementById("y-axis-select").value;
    color_value_label = document.getElementById("color-value-select").value;
    division_value = document.getElementById("division-select").value;


    setupVariables(public_dataset);

}

/*
 *  Updates the min and max color values of the shown on screen.
 */
function drawColorScale(gradientColorScale, colorArray) {

    d3.select("#gradient-min")
        .style("color", gradientColorScale(d3.min(colorArray)))
        .text("Min value: " + d3.min(colorArray));

    d3.select("#gradient-max")
        .style("color", gradientColorScale(d3.max(colorArray)))
        .text("Max value: " + d3.max(colorArray));

}

/*
 *  Draws a polygon on the star plot for a particular city.
 */
function drawStarPlot(cityIndex, color) {
    var polygonGroup = svg.select("g#city-drawing-canvas").append("g");
    var pointsGroup = svg.select("g#city-drawing-canvas").append("g");


    var cityData = public_dataset[cityIndex];

    displayed_datasets.push(cityData);


    var currentAngle = 0;
    var angleChange = 360/starPlotSides;
    var coordinates_city = [];
    var firstPoint;

    for (var i = 0; i < starPlotSides; i ++ ) {
        var cur_value = cityData[cur_filters[i]];

        //finds min max for the current filter
        findMinMax(cur_filters[i]);

        var newValue = convertToNewRange(cur_value, cur_minValue, cur_maxValue, 0, starPlotRadius);

        var tempX = newValue*Math.sin(toRadians(currentAngle));
        var tempY = -newValue*Math.cos(toRadians(currentAngle));
        var tempXY = {x: tempX, y: tempY};

        // sets up the first point
        if (i == 0) {
            firstPoint = tempXY;
        }
        coordinates_city.push(tempXY);

        // uses first point for last point
        if (i == (starPlotSides-1)) {
            coordinates_city.push(firstPoint);
        }

        var currentIndex;

        if (currentAngle > 0) {
            currentIndex = 360 % currentAngle;
        }
        else {
            currentIndex = 0;
        }
        
        pointsGroup.append("circle")
            .datum(cityData)
            .attr("transform", "rotate(" + currentAngle + ")")
            .attr("cx", 0)
            .attr("cy", -newValue)
            .attr("r", 4)
            .attr("fill", color)
            .attr("value", cur_value)
            .attr("index", cityIndex)
            .attr("class", "city-" + cityIndex)
            .on("mouseover", starMouseOverFn)
            .on("mouseout", starMouseOutFn);

        currentAngle += angleChange;
    }

    //uses points to create city's polygon
    var lineFunction = d3.svg.line()
                        .x(function(d) { return d.x; })
                        .y(function(d) { return d.y; })
                        .interpolate("linear");
    
    polygonGroup.append("path")
        .attr("d", lineFunction(coordinates_city))
        .attr("stroke", color)
        .attr("stroke-width", 1)
        .attr("class", "city-" + cityIndex)
        .attr("fill", "none");

}

/*
 *  Draws the background of the starplot (no cities involved).
 */
function drawOutline() {
    /*
     *  To get the coordinates after rotating:
     *  y' = y*cos(a) - x*sin(a)
     *  x' = y*sin(a) + x*cos(a)
     *  where a = angle (in radians)
     */
    var currentAngle = 0;
    var angleChange = 360/starPlotSides;
    var changeTickY = starPlotRadius/starPlotTicks;

    for (var i = 0; i < starPlotSides; i++ ) {
        //axis lines
        svg.select("g#outline-canvas")
            .append("line")
            .attr("transform", "rotate("+ currentAngle+")")
            .attr("x1", 0)
            .attr("y1", 0)
            .attr("x2", 0)
            .attr("y2", -starPlotRadius)
            .style("stroke", "rgb(5,5,5)")
            .style("opacity", 0.2);

        //tickmarks
        drawTickMarks(cur_filters[i], changeTickY, currentAngle);

        //labels
        findMinMax(cur_filters[i]);

        if (i == 1 || i == 4) {
            labelRadius = -starPlotRadius-80;
        } else if (i == 0) {
            labelRadius = -starPlotRadius-65;
        } else {
            labelRadius = -starPlotRadius-40;
        }

        var tempX = -(labelRadius*Math.sin(toRadians(currentAngle))); 
        var tempY = (labelRadius*Math.cos(toRadians(currentAngle)))+starPlotRadius;

        svg.select("g#outline-canvas")
            .append("text")
            .attr("text-anchor", "middle")
            .attr("transform", "translate("+tempX+","+tempY+")")
            .attr("x", 0)
            .attr("y", -starPlotRadius)
            .html(cur_filters[i]);

        tempY += 20;
        svg.select("g#outline-canvas")
            .append("text")
            .attr("text-anchor", "middle")
            .attr("transform", "translate("+tempX+","+tempY+")")
            .attr("x", 0)
            .attr("y", -starPlotRadius)
            .style("font-size", 12)
            .html("Min: " +cur_minValue);

        tempY += 20;
        svg.select("g#outline-canvas")
            .append("text")
            .attr("text-anchor", "middle")
            .attr("transform", "translate("+tempX+","+tempY+")")
            .attr("x", 0)
            .attr("y", -starPlotRadius)
            .style("font-size", 12)
            .html("Max: " +cur_maxValue);

        currentAngle += angleChange;
    }

}

/*
 *  Draws the tick marks that are on the starplot axes.
 */
function drawTickMarks(filter, changeInY, angle) {
    findMinMax(filter);

    var currentAngle = angle;
    var currentTickY = -changeInY;
    var tickValueChange = (cur_maxValue-cur_minValue)/starPlotTicks;
    var currentTickValue = cur_minValue+ tickValueChange;

    for (var j = 0; j < starPlotTicks; j++) {
        if (j == (starPlotTicks-1)) {
            currentTickValue = cur_maxValue;
        }
        svg.select("g#outline-canvas")
            .append("line")
            .attr("transform", "rotate("+ currentAngle+")")
            .attr("x1", -5)
            .attr("y1", currentTickY)
            .attr("x2", 5)
            .attr("y2", currentTickY)
            .attr("value", currentTickValue)
            .style("stroke", "rgb(5,5,5)")
            .style("stroke-width", 1)
            .style("opacity", 0.2);

            currentTickY -= changeInY;
            currentTickValue += tickValueChange;
    }
}

/*
 *  Finds and sets the min and max values of the input
 */
function findMinMax(filter) {
    dataset_columns.forEach(function(obj){
        if (obj.name == filter) {
            cur_minValue = obj.min;
            cur_maxValue = obj.max;
        }
    });
}

/*
 *  Convert a angle that is in degrees into radians.
 *  @return angle   angle (in degrees)
 */
function toRadians(angle) {
    return angle * (Math.PI / 180);
}

/*
 *  Maps a value from one range to another and returns it.
 */
function convertToNewRange(oldValue, oldMin, oldMax, newMin, newMax) {
    var oldRange = oldMax - oldMin;
    var newRange = newMax - newMin;
    var newValue = ( ((oldValue - oldMin) * newRange) / oldRange ) + newMin
    return newValue;
}

/*
 *  Mouseover function for starplot.
 *  Enlarges points and outline of the hovered city. Draws tooltip
 */
var starMouseOverFn = function(d, i) {
    var point = d3.select(this);
    point.transition()
        .attr("r", 7);  

    //draw tooltip
    d3.select("#tooltip")
        .style("visibility", "visible")
        // declare d3.event to make this work in Firefox
        .style("top", (d3.event.pageY-10)+"px").style("left",(d3.event.pageX+10)+"px")
        .html("<strong>" + d.msa_name + "</strong><br />Value: " + point.attr("value"))
        .style("opacity", 0.0)
        .transition()
        .style("opacity", 1.0);

    // select city by its id
    d3.select("#city-drawing-canvas path.city-" + point.attr("index"))
        .transition()
        .attr("stroke-width", 4);

};

/*
 *  Mouseout function for starplot
 *  Hide the tooltip when mouse leaves point area.
 */
var starMouseOutFn = function(d, i) {
    var point = d3.select(this);

    d3.select(this)
        .transition()
        .attr("r", 4);

    d3.select("#tooltip").style("visibility", "hidden");

    d3.select("#city-drawing-canvas path.city-" + point.attr("index"))
        .transition()
        .attr("stroke-width", 1);       
};

/*
 *  Redraws the starplot using the cities stored in the selected_cities array.
 */
function updateStarAxes() {

    clearStarPlot();

    svg.select("g#outline-canvas").selectAll("circle")
        .datum(cur_filters);
    svg.append("g")
        .attr("id", "outline-canvas")
        .attr("transform", "translate(" + starPlotCentreX + ", " + starPlotCentreY + ")");

    svg.append("g")
        .attr("id", "city-drawing-canvas")
        .attr("transform", "translate(" + starPlotCentreX + ", " + starPlotCentreY + ")");
    drawOutline();


    for (var i = 0, len = selected_cities.length; i < len; i++) {
        drawStarPlot(selected_cities[i].id, selected_cities[i].color);
    }

}

/*
 *  Clears the starplot and redraws the background (axes and tickmarks).
 */
function clearStarPlot() {

    d3.select("#starplot-svg-div svg").remove();

    svg = d3.select("#starplot-svg-div")
            .append("svg")
            .attr("width", width)
            .attr("height", height);

    a_axis_label = document.getElementById("a-axis-select").value;
    b_axis_label = document.getElementById("b-axis-select").value;
    c_axis_label = document.getElementById("c-axis-select").value;
    d_axis_label = document.getElementById("d-axis-select").value;
    e_axis_label = document.getElementById("e-axis-select").value;

    cur_filters = [];
    cur_filters.push(a_axis_label, b_axis_label, c_axis_label, d_axis_label, e_axis_label);
}

/*
 *  Clears the cities from the starplot.
 */
function clearCities() {
    clearStarPlot();

    svg.select("g#outline-canvas").selectAll("circle")
        .datum(cur_filters);
    svg.append("g")
        .attr("id", "outline-canvas")
        .attr("transform", "translate(" + starPlotCentreX + ", " + starPlotCentreY + ")");

    svg.append("g")
        .attr("id", "city-drawing-canvas")
        .attr("transform", "translate(" + starPlotCentreX + ", " + starPlotCentreY + ")");
    drawOutline();
}