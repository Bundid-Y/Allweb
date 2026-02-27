Add-Type -AssemblyName System.Drawing
$img = [System.Drawing.Image]::FromFile("C:\xampp\htdocs\all-web\koch\img\other\index\about\box_about.png")
$bmp = New-Object System.Drawing.Bitmap($img)
$counts = @{}
for ($x = 0; $x -lt $bmp.Width; $x += 10) {
    for ($y = 0; $y -lt $bmp.Height; $y += 10) {
        $c = $bmp.GetPixel($x, $y)
        if ($c.R -gt 150 -and $c.G -lt 100 -and $c.B -lt 100) {
            $hex = '#{0:x2}{1:x2}{2:x2}' -f $c.R, $c.G, $c.B
            $counts[$hex]++
        }
    }
}
$counts.GetEnumerator() | Sort-Object Value -Descending | Select-Object -First 5
