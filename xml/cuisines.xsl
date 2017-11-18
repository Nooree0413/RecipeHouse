<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<body>
  <h2>Types of Cuisines</h2>
  <table border="1">
    <tr bgcolor="lightgrey">
      <th>Type</th>
      <th>Dish</th>
     
     
    </tr>
    <xsl:for-each select="Cuisines/Cuisine">
    <tr>
      <td><xsl:value-of select="Type"/></td>
      <xsl:choose>
      <xsl:when test="Type" > 
         <td bgcolor="#1BBC9B"><xsl:value-of select="Dish"/></td>
        
      </xsl:when>
      <xsl:otherwise>
        <td><xsl:value-of select="Dish"/></td>
         
        
      </xsl:otherwise>
      </xsl:choose>
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>

