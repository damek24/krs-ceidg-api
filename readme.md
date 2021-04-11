## Informacje ogólne
1. Biblioteka została stworzona do API dostępnego pod adresem 
   https://api.stat.gov.pl/Home/RegonApi
2. W celu uzyskania klucza API należy wykonać instrukcje dostępne na stronie
   https://api.stat.gov.pl/Home/RegonApi

## Wymagania
Do poprawnego działania API wymagane jest zainstalowanie PHP 8
   
## Instalacja
W celu instalacji należy wykonać 
```
composer require damianjozwiak/krs-api
```

## Dostępne metody
### 1. Zaloguj(Zaloguj $zaloguj): ZalogujResult

Wykonanie tej metody jest niezbędne przed wywołaniem każdej z kolejnych metod
```
use Damianjozwiak\KrsApi\KrsClient;
use Damianjozwiak\KrsApi\RequestModels\Zaloguj;
$client = new KrsClient(new Zaloguj('API_KEY'));
```

### 2. DaneSzukajPodmioty(SzukajPodmioty $szukajPodmioty): DanePodmiotuResult|DanePodmiotowResult|null
Przykładowe wywołania. W wywołaniu można podać też pojedynczy regon lub ich listę
```
$data = $client->DaneSzukajPodmioty(new SzukajPodmioty(Nip: '1234567890'));
/** @var $data DanePodmiotuResult */
$data2 = $client->DaneSzukajPodmioty(new SzukajPodmioty(Nipy: '1234567890 0987654321'));
/** @var $data2 DanePodmiotowResult */
```

### 3. function PobierzTypDzialanosci(string $regon): TypPodmiotu | DanePodmiotowResult
Przykładowe wywołania. W wywołaniu można podać też pojedynczy regon lub ich listę
```
$data = $client->PobierzTypDzialanosci('123456789');
/** @var $data TypPodmiotu */
$data2 = $client->PobierzTypDzialanosci('123456789 987654321');
/** @var $data2 DanePodmiotowResult */
```
### 4. function PobierzDaneOsobyFizycznej(string $regon): OsobaFizycznaOgolny | DanePodmiotowResult
Przykładowe wywołania. W wywołaniu można podać też pojedynczy regon lub ich listę
```
$data = $client->PobierzDaneOsobyFizycznej('123456789');
/** @var $data OsobaFizycznaOgolny */
$data2 = $client->PobierzDaneOsobyFizycznej('123456789 987654321');
/** @var $data2 DanePodmiotowResult */
```

### 5. function PobierzDaneOsobyFizycznejCeidg(string $regon): OsobaFizycznaCeidg | DanePodmiotowResult
Przykładowe wywołania. W wywołaniu można podać też pojedynczy regon lub ich listę
```
$data = $client->PobierzDaneOsobyFizycznejCeidg('123456789');
/** @var $data OsobaFizycznaCeidg */
$data2 = $client->PobierzDaneOsobyFizycznejCeidg('123456789 987654321');
/** @var $data2 DanePodmiotowResult */
```

### 6. function PobierzDaneOsobyPrawnej(string $regon): OsobaPrawnaOgolny | DanePodmiotowResult
Przykładowe wywołania. W wywołaniu można podać też pojedynczy regon lub ich listę
```
$data = $client->PobierzDaneOsobyPrawnej('123456789');
/** @var $data TypPodmiotu */
$data2 = $client->PobierzDaneOsobyPrawnej('123456789 987654321');
/** @var $data2 DanePodmiotowResult */
```

### 7.function DanePobierzPelnyRaport(PelnyRaport $pelnyRaport)
Przykładowe wywołania. W wywołaniu można podać też pojedynczy regon lub ich listę
```
$data = $client->DanePobierzPelnyRaport(new PelnyRaport('123456789',PelnyRaport::OSOBA_FIZYCZNA_PKD));
/** @var $data stdClass */
$data2 = $client->DanePobierzPelnyRaport(new PelnyRaport('123456789 987654321',PelnyRaport::OSOBA_FIZYCZNA_PKD));
/** @var $data2 DanePodmiotowResult */
```

## Pozostałe informacje
W folderze docs znajdują się 

1. słowniki symboli w formacie xlsx

2. struktury Pełnych raportów w formacie sql

3. plik pdf z opisem wszystkich metod API