@extends('layout')

@section('title')
    {{ get_label('gantt_chart', 'Gantt Chart') }}
@endsection

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gantt Chart</title>
    <link rel="stylesheet" href="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.css">
    <script src="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.js"></script>
    <style>
        body, html {
            width: 100%;
            height: 100%;
            margin: 0;
        }
        .today {
            background: #0372e6;
        }
        .current_month {
            background: #0372e6;
            color: white;
            border-radius: 16px;
            margin: 5px;
            height: 20px;
            line-height: 22px;
        }
        .gantt_row_project, .project_row {
            border-bottom: none;
        }
        .grid_toggle {
            border-radius: 99px;
            border: 1px solid gray;
            display: inline-block;
            font-size: 20px;
            cursor: pointer;
        }
        .project_icon {
            font-size: 60px;
        }
    </style>
</head>
<body>
    <div id="gantt_here" style="width:100%; height:100%;"></div>

    <script>
        gantt.plugins({ marker: true });

        const today = new Date();
        gantt.addMarker({ start_date: today, css: "today" });

        // Gantt configuration
        gantt.config.round_dnd_dates = false;
        gantt.config.drag_project = true;
        gantt.config.drag_progress = false;
        gantt.config.drag_links = false;
        gantt.config.scale_height = 60;
        gantt.config.min_column_width = 180;
        gantt.config.min_grid_column_width = 30;
        gantt.config.open_tree_initially = true;
        gantt.config.auto_types = true;
        gantt.config.bar_height = 20;

        // Scales for Gantt chart
        gantt.config.scales = [
            {
                unit: "quarter", step: 1, format: (date) => `<b>Q${Math.floor(date.getMonth() / 3) + 1}</b> ${date.getFullYear()}`
            },
            {
                unit: "month", step: 1, format: (date) => {
                    const monthName = gantt.date.date_to_str("%F")(date);
                    const nextDate = gantt.date.add(date, 1, "month");
                    return (+date <= +today && +today <= +nextDate) 
                        ? `<div class="current_month">${monthName}</div>` 
                        : monthName;
                }
            }
        ];

        // Columns configuration
        let gridToggleText = "lt";
        const initialGridWidth = 400;

        gantt.config.columns = [
            { name: "text", label: " ", width: 300, tree: true },
            {
                name: "dates", label: getToggleButton(), align: "center", template: (task) => 
                    task.type === "project" ? "" : formatTaskDates(task)
            }
        ];

        function getToggleButton() {
            return `<div class="grid_toggle" onclick="toggleGrid()">&nbsp;&${gridToggleText};&nbsp;</div>`;
        }

        function toggleGrid() {
            gantt.config.grid_width = gridToggleText === "lt" ? 80 : initialGridWidth;
            gridToggleText = gridToggleText === "lt" ? "gt" : "lt";
            gantt.config.columns[1].label = getToggleButton();
            gantt.render();
        }

        function formatTaskDates(task) {
            const startMonth = gantt.date.date_to_str("%M");
            const endMonth = gantt.date.date_to_str("%M");
            const day = gantt.date.date_to_str("%j");
            return `${startMonth(task.start_date)} ${day(task.start_date)} - ${endMonth(task.end_date)} ${day(task.end_date)}`;
        }

        // Define tasks
        const tasks = {
            data: [
                { id: "1000", text: "Market Analysis", color: "#0385be", bar_height: 5, start_date: "2023-02-02", duration: 2, order: 10, parent: "0" },
                { id: "1", text: "Competitor Benchmarking", color: "#fbab41", start_date: "2023-02-12", duration: 15, order: 20, parent: "1000" },
                { id: "2000", text: "Product Enhancement", color: "#fb5dc3", bar_height: 5, start_date: "2023-02-01", duration: 2, order: 20, parent: "0" },
                { id: "2", text: "Roadmap Planning", color: "#fb5dc3", start_date: "2023-06-03", duration: 9, order: 20, parent: "2000" },
                { id: "3000", text: "Customer Engagement Initiative", color: "#fdcb06", bar_height: 5, start_date: "2023-02-02", duration: 2, order: 10, parent: "0" },
                { id: "3", text: "User Feedback Analysis and Action Plan", color: "#fbab41", start_date: "2023-04-10", duration: 7, order: 20, parent: "3000" },
                { id: "4000", text: "Workflow Refinement", color: "#df4a60", bar_height: 5, start_date: "2023-02-01", duration: 2, order: 20, parent: "0" },
                { id: "4", text: "Metrics Evaluation", color: "#a15ed9", start_date: "2023-05-07", duration: 16, order: 20, parent: "4000" },
            ],
            links: []
        };

        // Initialize Gantt chart
        gantt.init("gantt_here");
        gantt.parse(tasks);
        gantt.showTask(1000);
    </script>
</body>
@endsection