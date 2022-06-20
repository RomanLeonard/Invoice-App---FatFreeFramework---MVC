<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/print.css">
    <title>PRINT</title>
    
</head>
<body>
    <div class="page">
        <div class="invoice-header">
            <div class="wrapper">
                <div class="info left">
                    <span>Furnizor: R-BIZ COMERCE S.R.L.</span>
                    <span>Reg. com.: J21/338/2020</span>
                    <span>CIF: 42921264</span>
                    <span>Adresa: Str. Soseaua Urziceni, Nr. 30, Maia, Jud. Ialomita</span>
                    <span>IBAN: RO50INGB0000999910590762</span>
                    <span>Banca: ING BANK NV</span>
                    <span>Capital social: 200 Lei</span>
                </div>
                <div class="center">
                    <span class="invoice-title">FACTURA</span>
                    <div class="invoice-det">
                        <span>Seria <?= ($invoice[0]['serial']) ?> Numarul <?= (str_pad($invoice[0]['number'], $USER_SETTINGS_INVOICE_NUMBER, "0", STR_PAD_LEFT)) ?></span>
                        <span>Data (zi/luna/an): 13/06/2022</span>
                    </div>
                </div>
                <div class="info right">
                    <div>
                        <span>Client: R-BIZ COMERCE S.R.L.</span>
                        <span>Adresa: Str. Soseaua Urziceni, Nr. 30, Maia, Jud. Ialomita</span>
                        <span>CUI: 42921264</span>
                        <span>ONRC: J21/338/2020</span>
                        <span>IBAN: RO50INGB0000999910590762</span>
                        <span>Banca: ING BANK NV</span>
                        <span>Capital social: 200 Lei</span>
                    </div>
                </div>
            </div>        
        </div>

        <div><?= (var_dump($invoice)) ?></div>

        <div class="invoice-body">
            <table>
                <thead>
                    <tr>
                        <th style="width: 15mm;">Nr. Crt.</th>
                        <th style="width: 105mm;">Denumirea produselor sau a serviciilor</th>
                        <th style="width: 20mm;">U.M.</th>
                        <th style="width: 20mm;">Cant.</th>
                        <th style="width: 20mm;">Pret unitar <br> -Lei- </th>
                        <th style="width: 20mm;">Valoarea <br> -Lei- </th>
                    </tr>
                </thead>
                <tbody style="overflow: hidden !important;">
                    <tr class="subtitle">
                        <td>0</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5(3x4)</td>
                    </tr>
            
                    <tr class="item">
                        <td class="text-center">1</td>
                        <td class="text-left">Prestari servicii</td>
                        <td class="text-center">buc.</td>
                        <td class="text-center">1</td>
                        <td class="text-right">2000</td>
                        <td class="text-right">2000</td>
                    </tr>
                    <tr class="item">
                        <td class="text-center">2</td>
                        <td class="text-left">Prestari servicii</td>
                        <td class="text-center">buc.</td>
                        <td class="text-center">1</td>
                        <td class="text-right">2000</td>
                        <td class="text-right">2000</td>
                    </tr>
                    <tr class="item">
                        <td class="text-center">3</td>
                        <td class="text-left">Prestari servicii</td>
                        <td class="text-center">buc.</td>
                        <td class="text-center">1</td>
                        <td class="text-right">2000</td>
                        <td class="text-right">2000</td>
                    </tr>

                    
            
                    <tr class="empty-space">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
            
                </tbody>
            </table> 
        </div>

        <div class="footer">
            <div class="content" style="display: grid; grid-template-columns: 30mm 108.3mm 59.7mm; border-bottom: 1.5px solid #000;;">
                <div class="left" style="border-right: 1.5px solid #000; border-left: 1.5px solid #000; padding: 2px 0 0 3px;">
                    Semnatura si stampila furnizor
                </div>
                <div class="center" style="border-right: 1.5px solid #000; padding-bottom: 4px;">
                    <div style="padding: 2px 0 0 3px;">Intocmit de: Roman Leonard-Marian </div>
                    <div style="padding: 2px 0 0 3px;">CNP: - </div>
                    <div style="padding: 2px 0 0 3px;">Numele delegatului: -</div>
                    <div style="padding: 2px 0 0 3px;">B.I/C.I: -</div>
                    <div style="padding: 2px 0 0 3px;">Mijloc transport: -</div>
                    <div style="padding: 2px 0 0 3px;">Expedierea s-a efectuat in prezenta noastra la data de ....................ora.........</div>
                    <div style="padding: 2px 0 0 3px;">Semnaturile:</div>
                </div>
                <div class="right" style="border-right: 1.5px solid #000;">
                    <div style="display: grid; grid-template-columns: 19.7mm 39mm; height: 16mm">
                        <div style="border-right: 1.5px solid #000; display: flex; align-items: center; padding: 0 0 0 3px"><span>Total</span></div>
                        <div style="text-align: right; display: flex; align-items: center; justify-content: flex-end; margin-right: 3px;"><span>2000</span></div>
                    </div>
                    <div style="border-top: 1.5px solid #000;">
                        <div style="padding: 2px 0 0 3px;">Semnatura de primire:</div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>