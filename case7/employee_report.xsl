<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <!-- Root template -->
  <xsl:template match="/">
    <html>
      <head>
        <title>Employee Report - Nepal</title>
        <style>
          body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
          }
          table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
          }
          th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
          }
          th {
            background-color: #1976D2;
            color: white;
          }
          tr:nth-child(even) {
            background-color: #f9f9f9;
          }
          tr:hover {
            background-color: #e3f2fd;
          }
        </style>
      </head>
      <body>
        <h1>Employee Report (Nepal)</h1>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Department</th>
              <th>Position</th>
              <th>Salary (NPR)</th>
              <th>Hire Date</th>
            </tr>
          </thead>
          <tbody>
            <!-- Loop through employees -->
            <xsl:for-each select="employees/employee">
              <tr>
                <td><xsl:value-of select="@id"/></td>
                <td><xsl:value-of select="name"/></td>
                <td><xsl:value-of select="department"/></td>
                <td><xsl:value-of select="position"/></td>
                <td><xsl:value-of select="salary"/></td>
                <td><xsl:value-of select="hireDate"/></td>
              </tr>
            </xsl:for-each>
          </tbody>
        </table>
      </body>
    </html>
  </xsl:template>

</xsl:stylesheet>
